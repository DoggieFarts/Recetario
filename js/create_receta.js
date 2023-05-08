
// Subir Imagen
const wrapper = document.querySelector(".wrapper");

//Formulario
const cancelBtn = document.querySelector("#cancel-btn");
const defaultBtn = document.querySelector("#default-btn");
const customBtn = document.querySelector("#custom-btn");

//let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_\ ]+$/;

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
    console.log(file);

    //Creamos la url
    objectURL = URL.createObjectURL(file);
    console.log(objectURL);
    //Modificamos el atributo src de la etiqueta img


    //const reader = new FileReader();
    //reader.onload = function (){
        $imgPreview.src = objectURL;
        wrapper.classList.add("active");

    //}
    //reader.readAsDataURL(file);


    cancelBtn.addEventListener("click", function (){
        $imgPreview.src = "";
        wrapper.classList.remove("active");
    });


    //if(this.value){
      //  let valueStore = this.value.match(regExp);
        //fileName.textContent = valueStore;
    //}

}


//Formulario de los ingredientes
const addBtn = document.querySelector(".add");
const input = document.querySelector(".inp-ggroup");

function removeInput(){
    this.parentElement.remove();
    i--;
}

var i=0;

function addInput(event){
    event.preventDefault();
    i++;
    const name = document.createElement("input");
    name.type="text";
    name.placeholder = "Digite su ingrediente";
    name.name="ingrediente"+i;

    const cantidad = document.createElement("input");
    cantidad.type="text";
    cantidad.placeholder = "Digite su cantidad";
    cantidad.name="cantidad"+i;

    //add medida
    const medida = document.createElement("select");
    cantidad.type="select";
    medida.name="medida"+i;

    //Opciones en el select
    
    var opciones = document.createElement("option");
    opciones.value="L"
    opciones.text="L"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="ml"
    opciones.text="ml"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="Kg"
    opciones.text="Kg"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="g"
    opciones.text="g"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="mg"
    opciones.text="mg"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="tz"
    opciones.text="tz"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="pz"
    opciones.text="pz"
    medida.add(opciones);
    var opciones = document.createElement("option");
    opciones.value="paq"
    opciones.text="paq"
    medida.add(opciones);

    var placeholderOption = document.createElement("option");
    placeholderOption.value='';
    placeholderOption.text="Seleccione una op";
    placeholderOption.disabled=true;
    placeholderOption.selected=true;



    const btn=document.createElement("a");
    btn.className = "delete";
    btn.innerHTML = "&times";

    btn.addEventListener("click", removeInput);

    const flex=document.createElement("div");
    flex.className="flex";

    const invi = document.createElement("input");;

    if(!!document.getElementsByName("ning")){

        invi.type="hidden";
        invi.name="ning";
        invi.value=i;
    }else{
        document.removeChild(ning);
        invi.type="hidden";
        invi.name="ning";
        invi.value=i;
    }

    input.appendChild(flex);
    flex.appendChild(name);
    flex.appendChild(cantidad);
    flex.appendChild(medida);
    flex.appendChild(btn);
    flex.appendChild(invi);

}

addBtn.addEventListener("click", addInput);


//Formulario de los pasos de la reseta

const addBtn2 = document.querySelector(".add2");
const input2 = document.querySelector(".inp-ggroup2");

function removeInput2(){
    this.parentElement.remove();
    j--;
}

var j=0;

function addInput2(event) {
    event.preventDefault();
    j++;
    const titulo = document.createElement("input");
    titulo.className="input-2";
    titulo.type="text";
    titulo.disabled=true;
    titulo.placeholder = "Paso: "+j;
    titulo.value="Paso: "+j;
    titulo.name="pason"+j;

    const name2 = document.createElement("textarea");
    name2.type = "text";
    name2.placeholder = "Digite su paso de la receta";
    name2.name = "paso" + j;

    const inimg = document.createElement("input");
    inimg.type="file";
    inimg.name="imp"+j;

    const btn2 = document.createElement("n");
    btn2.className = "delete";
    btn2.innerHTML = "&times";

    btn2.addEventListener("click", removeInput2);

    const flex2=document.createElement("div");
    flex2.className="flex2";

    const invi2 = document.createElement("input");;

    if(!!document.getElementsByName("ning1")){

        invi2.type="hidden";
        invi2.name="ning1";
        invi2.value=j;
    }else{
        document.removeChild(ning);
        invi2.type="hidden";
        invi2.name="ning1";
        invi2.value=j;
    }

    input2.appendChild(flex2);
    flex2.appendChild(titulo);
    flex2.appendChild(name2);
    flex2.appendChild(inimg);
    flex2.appendChild(btn2);
    flex2.appendChild(invi2);

}

addBtn2.addEventListener("click", addInput2);

//Boton de imprimir pagina
function imprimirPagina(){
    window.print();
}
