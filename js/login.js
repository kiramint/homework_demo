let visualble = 0;
function passwordVisability() {
    if(visualble === 0) {
        visualble = 1;
        document.querySelector("#password").type='text';
        document.querySelector(".login-logwin-input-pwvis").className=`login-logwin-input-pwvis fa fa-eye`;
    }else if(visualble ===1)
    {
        visualble = 0;
        document.querySelector("#password").type='password';
        document.querySelector(".login-logwin-input-pwvis").className=`login-logwin-input-pwvis fa fa-eye-slash`;
    }
}