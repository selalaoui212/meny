var formEl=document.forms.length&&document.forms[0],submitEl=formEl&&formEl.login,submitElText=submitEl&&submitEl.children[0],spinnerEl=submitEl&&submitEl.children[1],passwordInputs=document.querySelectorAll(".ngr-input[data-type='password']");function formatMobileNumber(e){return`${e.substr(0,3)} ${e.substr(3,2)} ${e.substr(5,3)}`}function generateFormUrl(e){window.location.search.replace(/^\?/,"").split("&").map((e=>e.split("=").map((e=>decodeURIComponent(e))))).toString().includes("access_token")||(e.action="/password/changepwd")}function handleEnterKeyPress(e){document.querySelectorAll("input").forEach((t=>{t.addEventListener("keypress",(function(t){"Enter"===t.key&&e.focus()}))}))}submitEl&&(formEl.onsubmit=function(){submitEl.disabled="disabled",spinnerEl&&submitElText&&(spinnerEl.style.display="inline-block",submitElText.style.display="none")}),passwordInputs&&passwordInputs.forEach((function(e){var t=e.children[0],n=e.children[1];t&&n&&(t.value.length>0&&n.classList.remove("hidden"),n.addEventListener("click",(function(e){"Vis"===e.target.innerText?(e.target.innerText="Skjul",t.type="text"):(e.target.innerText="Vis",t.type="password")})),t.addEventListener("input",(function(e){0===e.target.value.length?n.classList.add("hidden"):n.classList.remove("hidden")})))}));