(()=>{var l=Object.defineProperty;var i=(e,n)=>{for(var a in n)l(e,a,{get:n[a],enumerable:!0})};var t={};i(t,{init:()=>o});function o(){let e=document.getElementById("hamburger");e.addEventListener("click",a=>{e.ariaLabel=="closed"?e.ariaLabel="opened":e.ariaLabel="closed"});let n=document.querySelectorAll("#hamburger + ul li a");for(let a of n)a.addEventListener("click",r=>{e.ariaLabel="closed"});document.querySelector("nav > ul").classList.add("transition")}window.MainNav=t;})();
