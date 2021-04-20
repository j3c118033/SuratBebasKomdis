function previewImg(){
    const foto = document.querySelector('#foto_ktm');
    const fotoLabel = document.querySelector('.custom-file-label');

    fotoLabel.textContent = foto.files[0].name;

    const file = new FileReader();
    file.readAsDataURL(foto.files[0]);
}