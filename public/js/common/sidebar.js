const sidebarTemplate = document.createElement('template');
sidebarTemplate.innerHTML = `

<style>
    .sidebar{
        width: 250px;
        /* height: 100vh; */
        height: calc(100vh - 80px);
        position: -webkit-sticky;
        position: sticky;
        top: 80px;
        background-color: #292d42;
    }
    .list{
        height:20px;
        width:100px;
        background-color: #000000;
    }
</style>

<div class="sidebar">
   <a href="<?php echo URL?>AdminEmployeeAccounts"><div class="list">Employees</div></a>
</div>
`

class Sidebar extends HTMLElement {
    constructor() {
        // Always call super first in constructor
        super();
    }

    connectedCallback() {
        const shadowRoott = this.attachShadow({ mode: 'open' });
        shadowRoott.appendChild(sidebarTemplate.content);
    }
}

customElements.define('sidebar-component', Sidebar);