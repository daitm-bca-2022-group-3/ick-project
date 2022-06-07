class ICKHeader extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: 'open' });
    this.template = document.createElement('template');
  }

  connectedCallback() {
    const linkEl = document.createElement('link');
    linkEl.setAttribute('rel', 'stylesheet');
    linkEl.setAttribute('href', this.getAttribute('style-path'));
    this.shadowRoot.appendChild(linkEl);

    this.render();
    this.shadowRoot.appendChild(this.template.content.cloneNode(true));
  }

  render() {
    const active = this.getAttribute('active').toLowerCase();
    this.template.innerHTML = `
      <header class="navbar">
        <img class="logo" src="${this.getAttribute('logo-path')}" alt="logo" />
        <nav>
          <ul class="nav_links">
            <li><a href="./" ${active === 'home' ? 'class="selected"' : ''}>HOME</li>
            <li><a href="./event.html" ${active === 'event' ? 'class="selected"' : ''}>EVENT</li>
            <li><a href="./about.html" ${active === 'about' ? 'class="selected"' : ''}>ABOUT<li>
            </ul>	
        </nav>
        <a class="cta" href="/login.html"><button class="header-button">LOGIN</a>
      </header>
    `;
  }
}

window.customElements.define('ick-header', ICKHeader);
