import Api from "./services/Api.js"
import { MUST_BUCTERY } from "./config/headers.js"

const FORM_DATA = document.forms.form_bacteria
const js_tab = document.getElementById("js_tab")
js_tab.addEventListener('click', (e) => {
   (async () => {
      if (tact.value.length === 0) {
         alert(MUST_BUCTERY)
         return
      }
      let response = await Api.getBacteria(tact.value)
      FORM_DATA.red.value = response.redReturn
      FORM_DATA.green.value = response.greenReturn
   })()
})