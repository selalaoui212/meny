var inputs=document.querySelectorAll(".ngr-input__field"),radios=document.querySelectorAll(".ngr-radio__input");function showHelpText(e){e.classList.add("ngr-help-text--visible")}function hideHelpText(e){e.classList.remove("ngr-help-text--visible")}function showInputOutlineError(e){e.classList.add("ngr-input__field--error")}function hideInputOutlineError(e){e.classList.remove("ngr-input__field--error")}function handleReset(){var e=document.querySelector(".ngr-input__prefix"),n=document.querySelectorAll(".ngr-help-text");e&&hideInputOutlineError(e),n.forEach((function(e){hideHelpText(e)})),inputs.forEach((function(e){hideInputOutlineError(e)}))}inputs.forEach((function(e){e.addEventListener("keyup",handleReset)})),radios.forEach((function(e){e.addEventListener("click",handleReset)}));