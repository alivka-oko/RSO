function valid(row){
    a=document.getElementById('form');
    result=a.rows[row].cells[1].firstElementChild.validity.valid;

    if (result) {
        a.rows[row].cells[2].innerHTML='<span class="fa fa-check"></span>';
    }
    else{
        a.rows[row].cells[2].innerHTML='<span class="fa fa-times"></span>';
    }
    controll();
    if (row==10){checkpass(12);}
}

async function uniq_username(username, valid) {
    form=new FormData();
    form.append('username', username);
    try {
        const response = await fetch('valid_user.php', {
            method: 'POST',
            body: form
        });
        let result = await response.text();
        console.log('Успех:', result);
        result=result.substr(2);
        a=document.getElementById('form');
        if (result=='true'&& valid){
            a.rows[8].cells[2].innerHTML='<span class="fa fa-check"></span>';
        }
        else {
            a.rows[8].cells[2].innerHTML='<span class="fa fa-times"></span>';
        }
        controll();
        if (result=='false') {
            a.rows[8].cells[2].innerHTML="<span class='fa fa-times'>\n\
Пользователь с таким именем уже существует</span>";
        }

    } catch (error) {
        console.log('Ошибка:', error);
        a.rows[8].cells[2].innerHTML='<span class="fa fa-times"></span>';
    }
}

function filecontrol(row) {
    a=document.getElementById('form');
    b=a.rows[row].cells[1].firstElementChild;
    size=b.files[0].size;
    type=b.files[0].type;
    if ((type=='image/png' || type=='image/jpeg' || type=='image/jpg') && size<2097152) {
        a.rows[row].cells[2].innerHTML='<span class="fa fa-check"></span>';
    }
    else{
        a.rows[row].cells[2].innerHTML='<span class="fa fa-times"></span>';
    }
    controll();
}

function checkpass(row) {
    a=document.getElementById('form');
    b=a.rows[row].cells[1].firstElementChild.value;
    c=a.rows[row-2].cells[1].firstElementChild.value;
    if (b==c){
        a.rows[row].cells[2].innerHTML='<span class="fa fa-check"></span>';
    }
    else{
        a.rows[row].cells[2].innerHTML='<span class="fa fa-times"></span>';
    }
    controll();
}

function controll() {
    rows=[0, 2, 4, 6, 8, 10, 12];
    a=document.getElementById('form');
    n=0;
    rows.forEach(function(item, i, rows){
        try {
            clasz= a.rows[item].cells[2].firstChild.className;
            if (clasz=="fa fa-check") {
                n++;
            }}
        catch (err){}
    });
    if (n==8) {
        document.getElementById('submit').disabled='';
    }
    else{
        document.getElementById('submit').disabled=true}
}
