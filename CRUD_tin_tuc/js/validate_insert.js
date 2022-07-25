function check(){
    let news_title = document.getElementById('news_title').value;

    if (news_title.length === 0){
        document.getElementById('error_title').innerHTML = 'Không được để trống!';
        return false;
    }
}