
// Subir Imagen

const wrapper = document.querySelector(".wrapper");
const fileName = document.querySelector(".file-name");

const cancelBtn = document.querySelector("#cancel-btn");
const defaultBtn = document.querySelector("#default-btn");
const customBtn = document.querySelector("#custom-btn");
const img = document.querySelector("img");

let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_\ ]+$/;

function defaultBtnActive(){
    defaultBtn.click();
}

function previewImage(event, querySelector){

    //Recuperamos el input que desencadeno la acción
    const input = event.target;

    //Recuperamos la etiqueta img donde cargaremos la imagen
    $imgPreview = document.querySelector(querySelector);

    // Verificamos si existe una imagen seleccionada
    if(!input.files.length) return

    //Recuperamos el archivo subido
    file = input.files[0];

    //Creamos la url
    objectURL = URL.createObjectURL(file);

    //Modificamos el atributo src de la etiqueta img


    const reader = new FileReader();
    reader.onload = function (){
        $imgPreview.src = objectURL;
        wrapper.classList.add("active");

    }
    reader.readAsDataURL(file);


    cancelBtn.addEventListener("click", function (){
        $imgPreview.src = "";
        wrapper.classList.remove("active");
    });


    if(this.value){
        let valueStore = this.value.match(regExp);
        fileName.textContent = valueStore;
    }

}

//Formulario de los ingredientes
const addBtn = document.querySelector(".add");
const input = document.querySelector(".inp-ggroup");

function removeInput(){
    this.parentElement.remove();
}

function addInput(){
    const name = document.createElement("input");
    name.type="text";
    name.placeholder = "Digite su ingrediente";

    const cantidad = document.createElement("input");
    cantidad.type="text";
    cantidad.placeholder = "Digite su cantidad";

    //add medida
    const medida = document.createElement("select");
    medida.type="text";
    medida.placeholder = "Digite su medida";


    const btn=document.createElement("a");
    btn.className = "delete";
    btn.innerHTML = "&times";

    btn.addEventListener("click", removeInput);

    const flex=document.createElement("div");
    flex.className="flex";

    input.appendChild(flex);
    flex.appendChild(name);
    flex.appendChild(cantidad);
    flex.appendChild(medida);
    flex.appendChild(btn);

}

function seleccionarMedidas(){
    let medidas = document.getElementById('medidas');
    let lenguaje = medidas.value;
}

addBtn.addEventListener("click", addInput);