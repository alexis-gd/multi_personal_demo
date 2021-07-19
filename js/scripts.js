//variables
var inputAll = document.forms[0].querySelectorAll("input"),
    selectAll = document.forms[0].querySelectorAll("select");
var formulario = document.getElementById("formulario");
// execute functions
document.getElementById('next_1').addEventListener('click', next_prev_send)
document.getElementById('prev_2').addEventListener('click', next_prev_send)
document.getElementById('next_2').addEventListener('click', next_prev_send)
document.getElementById('prev_3').addEventListener('click', next_prev_send)
document.getElementById('next_3').addEventListener('click', next_prev_send)
document.getElementById('prev_4').addEventListener('click', next_prev_send)
    // document.getElementById('send').addEventListener('click', next_prev_send)

// functions
function next_prev_send() {
    switch (this.id) {
        case "next_1":
            if (validate(0, 0, 7, 2, this.id) == 1) {
                transitions("section_1", "section_2")
            }
            break;
        case "next_2":
            if (validate(7, 2, 3, 2, this.id) == 1) {
                transitions("section_2", "section_3")
            }
            break;
        case "next_3":
            if (validate(10, 0, 5, 0, this.id) == 1) {
                transitions("section_3", "section_4")
            }
            break;
        case "prev_2":
            transitions("section_2", "section_1")
            break;
        case "prev_3":
            transitions("section_3", "section_2")
            break;
        case "prev_4":
            transitions("section_4", "section_3")
            break;
        default:
            alert("undefined");
            break;
    }
}

formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    var datos = new FormData(formulario);
    if (validate(15, 0, 4, 0, this.id) == 1) {
        var btn_sen = document.getElementById("send")
        var btn_prev4 = document.getElementById("prev_4")
        var spin = document.getElementById('spin')
        spin.classList.remove("d-none")
        btn_sen.disabled = true
        btn_prev4.disabled = true
            // for (let i = 0; i < 19; i++) {
            //     inputAll[i].readOnly = true
            // }
            // for (let i = 0; i < 4; i++) {
            //     selectAll[i].readOnly = true
            // }
        const data = new FormData();
        data.append('curp', inputAll[4].value);
        fetch('funciones/validate_curp.php', {
                method: 'POST',
                body: data
            })
            .then(res => res.json())
            .then(data => {
                if (data == 1) {
                    fetch('funciones/insert.php', {
                            method: 'POST',
                            body: datos
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data == 1) {
                                location.href = window.location.href + "registrados.php"
                            } else {
                                alert("¡Ups! al parecer hubo un error, contacta a soporte.");
                            }
                        })
                } else {
                    alert("La CURP ingresada ya existe, favor de verificarla para continuar. (regresa a la primer sección)");
                    document.forms[0].querySelectorAll("input")[4].classList.add("fail")
                    spin.classList.add("d-none")
                    btn_sen.disabled = false
                    btn_prev4.disabled = false
                }
            })
    }
});

function validate(ix, iy, inputs, selects, button) {
    var count1 = 0
    var count2 = 0
    for (let i = ix; i < inputs + ix; i++) {
        var valor = inputAll[i].value
        if (inputAll[i].checkValidity()) {
            count1++
        } else {
            alert(inputAll[i].validationMessage + " (" + inputAll[i].placeholder + " )")
            inputAll[i].classList.add("fail")
            document.getElementById(button).disabled = true
            setTimeout(function() {
                inputAll[i].classList.remove("fail")
                document.getElementById(button).disabled = false
            }, 2000)
            return false
        }
    }
    for (let i = iy; i < selects + iy; i++) {
        var valor = selectAll[i].value
        if (valor != "") {
            count2++
        } else {
            alert(selectAll[i].validationMessage)
            selectAll[i].classList.add("fail")
            document.getElementById(button).disabled = true
            setTimeout(function() {
                selectAll[i].classList.remove("fail")
                document.getElementById(button).disabled = false
            }, 2000)
            return false
        }
    }
    if (count1 == inputs && count2 == selects) {
        return 1
    } else {
        return false
    }
}

function transitions(out, join) {
    document.getElementById(out).classList.add("fade-out")
    setTimeout(function() { document.getElementById(out).classList.add("d-none") }, 500)
    setTimeout(function() { document.getElementById(out).classList.remove("fade-out") }, 500)
    document.getElementById(join).classList.add("fade-in")
    setTimeout(function() { document.getElementById(join).classList.remove("d-none") }, 500)
    setTimeout(function() { document.getElementById(join).classList.remove("fade-in") }, 500)
}
document.getElementById('ine').addEventListener('change', doit)
document.getElementById('curp').addEventListener('change', doit)
document.getElementById('recibo').addEventListener('change', doit)
document.getElementById('imagen').addEventListener('change', doit)

function doit() {
    var fileName = this.value.split("\\").pop();
    this.nextElementSibling.innerHTML = fileName
}