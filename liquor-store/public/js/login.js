$(document).ready(function (){
    $('#icon-eye').click(function (){
        // alert(1);
        let typeValue = $('#inputPassword').attr('type');
        typeValue = (typeValue === 'password') ? 'text' : 'password';
        $('#inputPassword').attr('type',typeValue)
        let classIconEye = (typeValue === 'password') ? 'fas fa-eye-slash' : 'fas fa-eye';
        $("#icon-eye .input-group-text i").removeClass();
        $("#icon-eye .input-group-text i").addClass(classIconEye);

        // if(typeValue !== 'password'){
        //     $(".input-group-text i").removeClass("fa-eye-slash");
        //     $(".input-group-text i").addClass("fa-eye");
        // }else {
        //     $(".input-group-text i").removeClass("fa-eye");
        //     $(".input-group-text i").addClass("fa-eye-slash");
        // }

    })
})
