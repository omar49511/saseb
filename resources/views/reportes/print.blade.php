
@extends('layouts.app')

@section('contenido')


 <div role="status" class="py-10 grid place-items-center ">
    <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div> 



@stop

@section('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

<script>

console.log('hola');
function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function (e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}

window.addEventListener('load', async () => {

    // const canvas = document.querySelector("canvas");
    // canvas.height = canvas.offsetHeight;
    // canvas.width = canvas.offsetWidth;
    
    var reporte = {
        "fecha": "{{$reporte->created_at}}",
        "id" : "{{$reporte->id}}",
        "firma" : "{{$reporte->firma}}", //nombre del responsable
        //en caso de ser necesario
        //"grupo" : "{{$reporte->grupo}}",
        "actividades" : "{{$reporte->actividades}}",
        "observaciones" : "{{$reporte->observaciones}}"
    };
    // signaturePad = new SignaturePad(canvas, {});
        
    console.log(reporte);

    generatePDF(reporte);

});

async function generatePDF(reporte) {
    // const image = await loadImage("pictures/format.png");
    // console.log(image);
    const pdf = new jsPDF('p', 'pt', 'letter');

    var img = new Image();
    img.src = "/pictures/format.png";
    img.onload = () =>{

        pdf.addImage(img, 'PNG', 0, 0, 565, 792);
        // pdf.addImage(signatureImage, 'PNG', 200, 605, 300, 60);

        pdf.setFontSize(11);
        // x, y
        pdf.text(convertDateDia(reporte.fecha.toString().split(" ")[0]), 370, 178);
        pdf.text(convertDateMes(reporte.fecha.toString().split(" ")[0]), 410, 178);
        //en caso de ser necesario
        //pdf.text("Grupo: "+reporte.grupo.toString(), 56, 209);
        pdf.text(reporte.id.toString(), 475, 211);
        pdf.text(reporte.firma.toString(), 260, 237);

        pdf.setFontSize(10);
        pdf.text(format(reporte.actividades.toString(), 13), 65, 320);
        pdf.text(format(reporte.observaciones.toString(), 13), 65, 517);
        
        console.log(img);
        pdf.save("reporte.pdf");
        window.location.replace("{{route('reporte.index')}}");
    };
}

function format(string, limit){
    const word_array = string.split(" ");
    const size = word_array.length;
    let paragraph = "";
    for (let i = 0; i < size; i++){
        if(i % limit == 0 && i != 0){
            paragraph += "\n";
        }
        paragraph += " " + word_array[i];
    }
    return paragraph;
}

var months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
/* funcion que regresa la fecha completa - en caso de ser necesaria
function convertDate(date_str) {
  temp_date = date_str.split("-");
  return temp_date[2] + " de " + months[Number(temp_date[1]) - 1] + " de " + temp_date[0] + ".";
}
*/
function convertDateDia(date_str) {
  temp_date = date_str.split("-");
  return temp_date[2];
}

function convertDateMes(date_str) {
  temp_date = date_str.split("-");
  return months[Number(temp_date[1]) - 1];
}
</script>

@stop