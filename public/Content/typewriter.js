var typewriter=function(t){"use strict";class e{constructor(t,e,s){this.element=t,this.words=e,this.period=parseInt(s,10)||2e3,this.loop=0,this.text="",this.isDeleting=!1,this.tick()}tick(){const t=this.words[this.loop%this.words.length];let e=200-100*Math.random();this.text=t.substr(0,this.text.length+(this.isDeleting?-1:1)),this.element.innerHTML='<span class="cursor">'+this.text+"</span>",this.isDeleting&&(e/=2),this.isDeleting&&""===this.text?(this.isDeleting=!1,this.loop+=1,e=500):this.text===t&&(e=this.period,this.isDeleting=!0);const s=this;setTimeout((function(){s.tick()}),e)}}return t.typewriter=function(){Array.from(document.getElementsByClassName("typewrite")).forEach((t=>{new e(t,JSON.parse(t.dataset.type),t.dataset.period)})),document.head.appendChild(Object.assign(document.createElement("style"),{innerHTML:".cursor{border-right:.05em solid;animation: caret 1s steps(1) infinite;}@keyframes caret{50%{border-color:transparent;}}"}))},Object.defineProperty(t,"__esModule",{value:!0}),t}({});