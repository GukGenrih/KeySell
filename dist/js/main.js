const registrateform = $('#modal_log_form')
const loginedform = $('#modal_reg_form')

console.log(registrateform)
console.log(loginedform)

registrateform.on('submit', function (event) {
    event.preventDefault();
});
loginedform.on('submit', function (event) {
    event.preventDefault();
});

async function register() {
    const formdata = new FormData();
    formdata.append('password', $('#password').val())
    formdata.append('email', $('#email').val())
    let response = await fetch('../dist/scripts/register.php', {
        method: 'POST',
        body: formdata
    })
    const responseData = await response.text()
    alert(JSON.parse(responseData))
    window.location.replace("../dist/index.php")
}

async function loginer() {
    const formdata = new FormData();
    formdata.append('logpassword', $('#logpassword').val());
    formdata.append('logemail', $('#logemail').val());
    let response = await fetch('../dist/scripts/login.php', {
        method: 'POST',
        body: formdata
    }).then(window.location.replace("../dist/index.php"))
}

async function logout() {
    let response = await fetch('../dist/scripts/logout.php', {}).then(window.location.replace("../dist/index.php")).then(alert('Вы вышли из аккаунта'))
}


async function buy(game_id, user_id) {

    if (user_id === undefined) {
        alert('Вы не вошли в аккаунт, исправьте неполадочку')
    } else {
        const formdata = new FormData();
        formdata.append('user_id', user_id)
        formdata.append('game_id', game_id)
        await fetch('../dist/scripts/buy.php', {
            method: 'POST',
            body: formdata
        }).then(alert('Вы успешно приобрели игру!'))
    }
}

function adminGo() {
    window.location.replace('../dist/admin.php')
}

$(document).on('input', '#range', function () {
    console.log($('#range').val())
    $('#range_vizual').text($('#range').val() + '%')
});

async function showForm(id) {

    for (let i = 1; i <= 5; i++) {
        let make_id = '#admin_form_' + i
        if (i === id) {
            if (id === 2) {
                ($(make_id)).fadeIn()
                let product = $('#select_edit_game').val()
            } else {
                ($(make_id)).fadeIn()
            }
        } else {
            ($(make_id)).fadeOut()
        }
    }
}

