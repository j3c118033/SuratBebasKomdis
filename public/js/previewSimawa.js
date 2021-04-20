function previewSimawa(){
    const fotoSimawa = document.querySelector('#foto_simawa');
    const fotoSimawaLabel = document.querySelector('.custom-file-label');

    fotoSimawaLabel.textContent = fotoSimawa.files[0].name;

    const fileSimawa = new FileReader();
    fileSimawa.readAsDataURL(fotoSimawa.files[0]);
}