/*#####################
#######################

	   UPLOADS

#######################
#######################*/
var input = document.querySelector("#xml_upload");
var preview = document.querySelector(".preview");
if (input != null) {
	input.style.visibility = "hidden";
	input.addEventListener("change", updateImageDisplay);
}
function updateImageDisplay() {
  while(preview.firstChild) {
	preview.removeChild(preview.firstChild);
  }
  var curFiles = input.files;
  if(curFiles.length === 0) {
	var para = document.createElement("p");
	para.textContent = "Nenhum arquivo atualmente selecionado para upload";
	preview.appendChild(para);
  } else {
	var list = document.createElement("ol");
	preview.appendChild(list);
	for(var i = 0; i < curFiles.length; i++) {
	  var listItem = document.createElement("li");
	  var para = document.createElement("p");
	  if(validFileType(curFiles[i])) {
		para.textContent = "ARQUIVO: " + curFiles[i].name + ", \nTAMANHO: " + returnFileSize(curFiles[i].size) + ".";
		var image = document.createElement("xml");
		image.src = window.URL.createObjectURL(curFiles[i]);
		listItem.appendChild(image);
		listItem.appendChild(para);
	  } else {
		para.textContent = "O ARQUIVO: " + curFiles[i].name + ": Não possui um formato válido. Selecione outro arquivo.";
		listItem.appendChild(para);
	  }
	  list.appendChild(listItem);
	}
  }
}
var fileTypes = [
  "text/xml"
]
function validFileType(file) {
  for(var i = 0; i < fileTypes.length; i++) {
	if(file.type === fileTypes[i]) {
	  return true;
	}
  }
  return false;
}
function returnFileSize(number) {
  if(number < 1024) {
	return number + "bytes";
  } else if(number > 1024 && number < 1048576) {
	return (number/1024).toFixed(1) + "KB";
  } else if(number > 1048576) {
	return (number/1048576).toFixed(1) + "MB";
  }
}