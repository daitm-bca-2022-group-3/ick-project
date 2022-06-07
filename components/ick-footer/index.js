class ICKFooter extends HTMLElement {
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
    this.template.innerHTML = `
      <footer class="footer">
        <div class="container">
          <div class="row2">
            <div class="footer-col first-col">
              <h4>Imperial College of Kolkata</h4>
              <ul>
                <li class="fa fa-map-marker" aria-hidden="true"></li><span class="footer-text">&nbsp;&nbsp;Block-S, 1/406A,
                  Baishnabghata Patuli Township<br />
                  Kolkata-700094</p></span><br />
                <li class="fa fa-phone" aria-hidden="true"></li><span class="footer-text">&nbsp;&nbsp;2436
                  0038/0099</span><br />
                <li class="fa fa-envelope" aria-hidden="true"></li> <span
                  class="footer-text">&nbsp;&nbsp;ick@gmail.com</span>
              </ul>
            </div>
            <div class="footer-col second-col">
              <h4>Links</h4>
              <ul>
                <li><a href="#">Academic</a></li>
                <li><a href="#">Initiatives</a></li>
                <li><a href="#">Weekly Blog</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Notice</a></li>
              </ul>
            </div>
            <div class="footer-col third-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <br />
            </div>
          </div>
        </div>
      </footer>
    `;
  }
}

window.customElements.define('ick-footer', ICKFooter);
