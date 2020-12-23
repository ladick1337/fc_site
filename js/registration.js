var opened = false;
function expansion(){
    var reg_block = document.querySelector('.registration__authorization');
    if(opened == false){
        // reg_block.classList.remove('registration_expDown');
        reg_block.classList.add('registration_expUp');
        reg_block.style.width = 500 + 'px';
        opened = true;
    }
    // else{
    //     reg_block.classList.remove('registration_expUp');
    //     reg_block.classList.add('registration_expDown');
    //     reg_block.style.width = 0;
    //     opened = false;
    // }
}