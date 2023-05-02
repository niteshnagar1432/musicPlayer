function basicFeature() {
    $('.s-icon').on('click',function () {
        $('.setting-box').slideToggle('slow');
    });
    $('.logIn').on('click',()=>{
        window.location.assign('logIn.html');
    })
    $('.e-profile').on('click',()=>{
        window.location.assign('edit-profile.html');
    })
    $('.setting').on('click',()=>{
        window.location.assign('user-setting.html');
    })
}

function InterNet(){
    setInterval(function () {
        if (navigator.onLine) {
            $('.main').fadeIn('slow');
            $('.interNate').fadeOut('fast');
            $('.setting-box').slideUp('slow');
        } else {
            $('.main').fadeOut('slow');
            $('.interNate').fadeIn('fast');
        }
    }, 10000);
    
}
function logOut() {
    localStorage.removeItem('user');
    localStorage.removeItem('user_date');
    localStorage.removeItem('user_pass');
    return 'logout sucess...';
}