(()=>{"use strict";document.addEventListener("DOMContentLoaded",(function(){t.init()})),window.addEventListener("resize",(function(){t.init()}));const t={init:function(e){this.holder=document.querySelectorAll(".qi-block-timeline"),this.holder.length&&[...this.holder].map((o=>{t.initItem(o,e)}))},getRealCurrentItem:function(t){return"string"==typeof t&&""!==t&&(t=qiBlocksEditor.qodefGetCurrentBlockElement.get(t)),t},initItem:function(e,o){if(!(e=t.getRealCurrentItem(e)))return;const i="object"!=typeof qiBlocksEditor?qiBlocks:qiBlocksEditor;o&&e.classList.remove("qodef--appeared"),i.qodefWaitForImages.check(e,(function(){setTimeout((()=>{t.initLogic(e),i.qodefIsInViewport.check(e,(function(){e.classList.add("qodef--appeared")}))}),o?800:0)}))},initLogic:function(e){const o=e.querySelector(".qodef-timeline-inner");if(e.classList.contains("qodef-timeline--horizontal")){let i=(document.body.classList.contains("wp-admin")?qiBlocksEditor.qodefGetCurrentBlockElement.getCurrentDocument():document).body,n=e.querySelectorAll(".qodef-e-item"),s=parseInt(e.offsetWidth,10),l=n?n.length:0,r=0,a=0,c=JSON.parse(e.getAttribute("data-options"));l>1&&(r=document.body.classList.contains("wp-admin")?i.classList.contains("qi-preview-screen-tablet")?s/parseInt(c.colNum1024,10):i.classList.contains("qi-preview-screen-mobile")?s/parseInt(c.colNum480,10):s/parseInt(c.colNum,10):qiBlocks.windowWidth>1440?s/parseInt(c.colNum,10):qiBlocks.windowWidth>1366?s/parseInt(c.colNum1440,10):qiBlocks.windowWidth>1024?s/parseInt(c.colNum1366,10):qiBlocks.windowWidth>768?s/parseInt(c.colNum1024,10):qiBlocks.windowWidth>680?s/parseInt(c.colNum768,10):qiBlocks.windowWidth>480?s/parseInt(c.colNum680,10):s/parseInt(c.colNum480,10),a=r*l,e.setAttribute("data-movement",r),e.setAttribute("data-moved",0),o.style.width=a+"px",o.style.transform="translateX(0)",t.initHeight(e),t.initMovement(e))}else o.style.width="auto",o.style.transform="none",t.initHeight(e)},initMovement:function(t){let e=parseInt(t.getAttribute("data-movement"),10),o=t.querySelector(".qodef-timeline-inner"),i=parseInt(t.offsetWidth,10),n=o?parseInt(o.clientWidth,10):0,s=t.querySelector(".qodef-nav-prev"),l=t.querySelector(".qodef-nav-next");s.addEventListener("click",(i=>{i.preventDefault();const n=parseFloat(t.getAttribute("data-moved"));if(n<-1){const i=n+e;o.style.transform="translateX( "+i+"px)",t.setAttribute("data-moved",i)}})),l.addEventListener("click",(s=>{s.preventDefault();const l=parseFloat(t.getAttribute("data-moved"));if(n-i+1>-l+e){const i=l-e;o.style.transform="translateX( "+i+"px)",t.setAttribute("data-moved",i)}}))},initHeight:function(t){let e=t.querySelectorAll(".qodef-e-item"),o=0,i=0;if(e.length&&(e.forEach((e=>{const n=e.querySelector(".qodef-e-content-holder"),s=e.querySelector(".qodef-e-top-holder");s&&n&&(n.style.height="auto",s.style.height="auto");let l=n?parseInt(window.getComputedStyle(n).getPropertyValue("height"),10):0,r=s?parseInt(window.getComputedStyle(s).getPropertyValue("height"),10):0;t.classList.contains("qodef-timeline-layout--horizontal-standard")?(r>o&&(o=r),l>i&&(i=l)):t.classList.contains("qodef-timeline-layout--horizontal-alternating")&&(l<r&&(l=r),l>i&&(i=l))})),e.forEach((e=>{let n=e.querySelector(".qodef-e-content-holder"),s=e.querySelector(".qodef-e-top-holder"),l=e.querySelector(".qodef-e-line-holder");t.classList.contains("qodef-timeline-layout--horizontal-standard")?(s&&(s.style.height=o+"px"),n&&(n.style.height=i+"px"),l&&(l.style.top=o+"px")):t.classList.contains("qodef-timeline-layout--horizontal-alternating")&&(s&&(s.style.height=i+"px"),n&&(n.style.height=i+"px"))}))),t.classList.contains("qodef-timeline-layout--horizontal-standard")){let e=t.querySelector(".qodef-nav-prev"),i=t.querySelector(".qodef-nav-next");e&&(e.style.top=o+"px"),i&&(i.style.top=o+"px")}}}})();