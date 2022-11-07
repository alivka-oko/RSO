async function uniq_username(username) {
    form=new FormData();
    form.append('username', username);
    try {
        const response = await fetch("testusername.php", {
            method: 'POST',
            body: form
        });
        let result = await response.text();
        console.log('Успех:', result);

        a=document.getElementById('warning');

        if (result==1) {
            console.log("Есть такой");
            a.innerHTML="<p style=\" font-size: 1em; color: red\">\n\
            Пользователь с таким именем уже существует</p>"
            document.getElementById('submit').disabled=true;

    }
        else  {
            console.log("чисто");
            a.innerHTML="<p style=\" font-size: 0.9em; color: transparent\"></p>"
            document.getElementById('submit').disabled='';
        }

    } catch (error) {
        console.log('Ошибка:', error);
        a.innerHTML='<span class="fa fa-times"></span>';
    }
}

function Red() {
    document.getElementById("username_valid").classList.toggle("blue");

}
