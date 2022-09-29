const $formUsuario = document.querySelector("#formUsuario");
const $btnChangePhoto1 = document.querySelector("#changePhotoProfile");
const $btnChangePhoto2 = document.querySelector("#changePhotoProfile2");
const $inputFilePhoto = document.querySelector("#inputFilePhoto");

let $currentContainer = undefined;
let $currentInput = undefined;
let $currentButtonEdit = undefined;
let $currentButtonCancel = undefined;
let $currentButtonSave = undefined;

$btnChangePhoto1?.addEventListener('click', handleClickChangePhoto);
$btnChangePhoto2?.addEventListener('click', handleClickChangePhoto);


$formUsuario?.addEventListener('submit', function (e) {
   e.preventDefault();
   setTimeout(() => {
      handleClickCancel($currentContainer, $currentButtonEdit, $currentInput);
   }, 1200);
});

$formUsuario?.addEventListener('click', function (e) {
   if (e.target.matches('[data-action-button="edit"]')) {
      $currentContainer = e.target.parentElement;
      $currentInput = e.target.parentElement.previousElementSibling.firstElementChild;
      $currentButtonEdit = $currentContainer.removeChild(e.target);
      $currentInput.removeAttribute('disabled');

      handleClickEdit($currentContainer);
   } else if (e.target.matches('[data-action-button="cancel"]')) {
      handleClickCancel($currentContainer, $currentButtonEdit, $currentInput);
   } else if (e.target.matches('[data-action-button="save"]')) {
      $currentButtonSave = e.target;
      handleClickSave($currentButtonSave, $currentButtonCancel);
   }
});

/**
 * Funcion que agrega los botones de guardar y cancelar
 * @param {HTMLElement} $container Contenedor principal de los botones de acciones
 */
function handleClickEdit($container) {
   $containerButtons = document.createElement('DIV');
   $containerButtons.classList.add('container-secondary-buttons');
   $containerButtons.innerHTML = `<button type="button" data-action-button="cancel" class="btn btn-secondary mt-1">cancelar</button>
   <button type="submit" data-action-button="save" class="btn btn-success mt-1">guardar</button>`;
   $container.appendChild($containerButtons);
   $currentButtonCancel = $container.querySelector('button[data-action-button="cancel"]')
}

/**
 * Funcion que elimina los botones de cancelar y guardar; y restablece editar
 * @param {HTMLElement} $container Contenedor principal de los botones de acciones
 * @param {HTMLElement} $button Botón de acción de editar
 * @param {HTMLInputElement} $input Input al que esta asociado el botón actual
 */
function handleClickCancel($container, $button, $input) {
   $container.removeChild($container.firstElementChild);
   $container.appendChild($button);
   $input.setAttribute('disabled', 'true');
}

/**
 * Función que dispara el evento de guardar (submit)
 * @param {HTMLElement} $buttonSave Botón de acción de guardar
 * @param {HTMLElement} $buttonCancel Botón de acción de cancelar
 */
function handleClickSave($buttonSave, $buttonCancel) {
   $buttonSave.classList.add('saving');
   $buttonCancel.setAttribute('disabled', true);
}

function handleClickChangePhoto() {
   $inputFilePhoto.click();
}