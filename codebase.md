# .gitignore

```
node_modules/
.DS_Store
```

# .prettierrc

```
{
  "semi": true,
  "singleQuote": true,
  "tabWidth": 2,
  "printWidth": 80,
  "trailingComma": "es5"
}

```

# assets/css/style.css

```css
*,::after,::before{box-sizing:border-box}*{margin:0}@media (prefers-reduced-motion:no-preference){html{interpolate-size:allow-keywords}}body{line-height:1.5;-webkit-font-smoothing:antialiased;font-family:"Open Sans",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background-color:#f8f9fa}canvas,img,picture,svg,video{display:block;max-width:100%}button,input,select,textarea{font:inherit}h1,h2,h3,h4,h5,h6,p{overflow-wrap:break-word}p{text-wrap:pretty}h1,h2,h3,h4,h5,h6{text-wrap:balance}#__next,#root{isolation:isolate}.request-quote-bar{background:#4caa48;text-align:center;padding:10px 0;margin-bottom:15px;position:relative;z-index:101}.request-quote-link{color:#fff;text-decoration:none;font-size:1rem}.site-header{background:#fff;box-shadow:0 2px 5px rgba(0,0,0,.1);padding:0 0 15px 0;position:sticky;top:0;z-index:100}.header-container{display:flex;align-items:center;justify-content:space-between;max-width:1200px;margin:0 auto;padding:0 20px}.logo{flex:0 0 auto}.logo .custom-logo{max-height:50px;width:auto}.logo .site-title{font-size:1.5rem;color:#333;text-decoration:none}.nav-toggle{display:none}.nav-toggle-label{display:none;cursor:pointer;width:30px;height:20px;position:relative;z-index:101}.nav-toggle-label span{display:block;height:3px;background:#333;margin-bottom:5px;transition:all .3s}.nav-toggle:checked~.primary-nav{display:block}.nav-toggle:checked+.nav-toggle-label span:nth-child(1){transform:rotate(45deg) translate(5px,5px)}.nav-toggle:checked+.nav-toggle-label span:nth-child(2){opacity:0}.nav-toggle:checked+.nav-toggle-label span:nth-child(3){transform:rotate(-45deg) translate(7px,-7px)}.primary-nav{flex:1;text-align:center}.primary-nav .nav-menu{list-style:none;margin:0;padding:0;display:flex;justify-content:center;gap:20px}.primary-nav .nav-menu li{position:relative}.primary-nav .nav-menu li .services-link-label,.primary-nav .nav-menu li a{color:#333;text-decoration:none;font-size:1rem;font-weight:500;padding:20px;transition:color .3s;cursor:pointer}.primary-nav .nav-menu li .services-link-label:hover,.primary-nav .nav-menu li a:hover{color:#007bff}.primary-nav .nav-menu li.has-mega-menu .mega-menu-toggle{display:none}.primary-nav .nav-menu li.has-mega-menu .mega-menu-toggle-label{display:inline-block;cursor:pointer;font-size:1.2rem;color:#333;margin-left:5px}.primary-nav .nav-menu li.has-mega-menu .services-icon{margin-left:5px;font-size:.9rem}.primary-nav .nav-menu li.has-mega-menu .mega-menu{display:none;position:absolute;top:100%;left:50%;transform:translateX(-50%);background:#fff;box-shadow:0 2px 5px rgba(0,0,0,.1);padding:15px;border-radius:5px;min-width:200px;z-index:100}.primary-nav .nav-menu li.has-mega-menu .mega-menu a{display:block;padding:10px;color:#333;text-decoration:none;font-size:.95rem;border-bottom:1px solid #eee}.primary-nav .nav-menu li.has-mega-menu .mega-menu a:last-child{border-bottom:none}.primary-nav .nav-menu li.has-mega-menu .mega-menu a:hover{color:#007bff}.primary-nav .nav-menu li.has-mega-menu .mega-menu-toggle:checked~.mega-menu{display:block}.contact-info{flex:0 0 auto;text-align:right}.contact-info .phone-number{color:#333;font-size:1rem;font-weight:600;text-decoration:none;margin-right:10px}.contact-info .phone-number i{margin-right:5px}.contact-info .phone-number:hover{color:#007bff}.contact-info .language-note{font-size:.85rem;color:#666}@media (max-width:768px){.request-quote-bar{margin-bottom:20px}.logo .custom-logo{max-height:60px}.header-container{flex-direction:column;align-items:center;justify-content:center}.nav-toggle-label{display:block;position:absolute;top:90px;right:20px;transform:translateY(-50%);width:20px}.nav-toggle-label span{display:block;height:3px;background:#222;margin-bottom:5px;transition:all .3s}.primary-nav{display:none;width:100%;text-align:left;padding:20px 0}.primary-nav .nav-menu{flex-direction:column;gap:20px;position:relative}.primary-nav .nav-menu li a{display:block;padding:15px 20px;border-bottom:1px solid #eee}.primary-nav .nav-menu li.has-mega-menu .mega-menu-toggle{display:none}.primary-nav .nav-menu li.has-mega-menu .mega-menu-toggle-label{display:inline-block;position:absolute;top:28px;left:80px;vertical-align:middle;margin-left:8px;font-size:1.5rem;background:0 0;border:none;cursor:pointer}.primary-nav .nav-menu li.has-mega-menu .mega-menu{display:none;position:static;transform:none;box-shadow:none;background:#f8f8f8;padding:0 20px}.primary-nav .nav-menu li.has-mega-menu .mega-menu a{padding:10px 0;border-bottom:1px solid #ddd}.primary-nav .nav-menu li.has-mega-menu .mega-menu a:last-child{border-bottom:none}.primary-nav .nav-menu li.has-mega-menu .mega-menu-toggle:checked~.mega-menu{display:block;margin-top:10px;margin-left:20px}.contact-info{margin-top:20px}}.hero{position:relative;text-align:center;padding:4rem 1rem;height:100vh;min-height:100vh;display:flex;flex-direction:column;justify-content:center;background-size:cover;background-position:center;will-change:background-position;background-repeat:no-repeat;color:#fff;background-attachment:scroll;background-color:#666}.hero .hero-content{position:relative;z-index:2}.hero .hero-content h1{font-size:3rem;margin-bottom:1rem;text-shadow:2px 3px 4px rgba(0,0,0,.4)}.hero .hero-content p{font-size:1.25rem;margin-bottom:2rem;text-shadow:1px 1px 2px rgba(0,0,0,.5)}.hero .hero-content .cta{display:inline-block;padding:1rem 1.5rem;background:#007bff;color:#f8f9fa;text-decoration:none;border-radius:5px;transition:background .3s ease}.hero .hero-content .cta:hover{background:rgb(0,98.4,204)}.why-choose-us{padding:1.5rem 1rem}.why-choose-us .container{max-width:1200px;margin:0 auto;text-align:center}.why-choose-us h2{font-size:2rem;margin-bottom:1.5rem;color:#333}@media (max-width:768px){.why-choose-us h2{font-size:1.8em}}.why-choose-us .benefits-list{list-style:none;padding:0;display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:2rem}@media (max-width:768px){.why-choose-us .benefits-list{grid-template-columns:1fr}}.why-choose-us .benefit-item{position:relative;display:flex;align-items:center;justify-content:center;min-width:260px;min-height:220px;padding:32px 20px;border-radius:18px;box-shadow:0 4px 24px rgba(0,0,0,.08),0 1.5px 6px rgba(0,0,0,.04);background-size:cover;background-position:center;background-repeat:no-repeat;overflow:hidden;color:#333;text-align:center;transition:box-shadow .2s,transform .2s;z-index:1}.why-choose-us .benefit-item:hover{box-shadow:0 8px 32px rgba(0,0,0,.14),0 3px 12px rgba(0,0,0,.08);transform:translateY(-4px) scale(1.03)}.why-choose-us .benefit-item::before{content:"";position:absolute;inset:0;background:rgba(0,0,0,.32);z-index:1}.why-choose-us .benefit-item>span{position:relative;z-index:2;font-size:1.25rem;font-weight:600;color:#fff;text-shadow:0 2px 8px rgba(0,0,0,.18);width:100%;display:block}.why-choose-us .benefit-icon{display:none}@media (min-width:1024px){.why-choose-us .benefit-icon{width:80px;height:80px;max-width:none;max-height:none;display:block;margin-bottom:16px}.why-choose-us .benefit-item{font-size:1.35rem;padding:24px 12px}.why-choose-us .benefit-item>span{font-size:1.35rem;line-height:1.5;font-weight:500;padding:0 8px}}.companies-trust-us{padding:2rem 0}.companies-trust-us .container{max-width:1200px;margin:0 auto;padding:0 1rem}.companies-trust-us h2{text-align:center;margin-bottom:2rem;color:#333;font-size:2rem}.companies-trust-us .companies-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:1.5rem;justify-items:center;align-items:center}.companies-trust-us .company-logo img{max-width:120px;height:auto;filter:grayscale(100%);opacity:.7;transition:filter .3s ease,opacity .3s ease}.companies-trust-us .company-logo img:hover{filter:grayscale(0);opacity:1}.services{margin:80px 0;text-align:center}.services h2{font-size:2rem;margin-bottom:30px}.services .service-list{display:flex;flex-wrap:wrap;justify-content:center;gap:20px}.services .service{flex:1 1 300px;max-width:300px;padding:0;background:#f1f3f5;border-radius:5px;overflow:hidden}.services .service .service-image{width:100%;height:180px;object-fit:cover;display:block;border-radius:0}.services .service .service-content{padding:20px}.services .service .service-content h3{font-size:1.5rem;margin-bottom:10px}.services .service .service-content p{font-size:1rem;margin-bottom:15px}.services .service .service-content .service-link{display:inline-block;padding:8px 15px;background:#007bff;color:#fff;text-decoration:none;border-radius:3px}.services .service .service-content .service-link:hover{background:#0056b3}.testimonials{padding:80px 0}.testimonials .container{max-width:1200px;margin:0 auto;padding:0 1rem}.testimonials h2{text-align:center;font-size:2rem;margin-bottom:2rem;color:#333}.testimonials .testimonials-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:2rem}.testimonials .testimonial-card{background:#f1f3f5;border-radius:8px;padding:1.5rem;box-shadow:0 2px 8px rgba(0,0,0,.1);text-align:center;transition:transform .3s ease}.testimonials .testimonial-card:hover{transform:translateY(-5px)}.testimonials .testimonial-card .testimonial-image{width:80px;height:80px;border-radius:50%;object-fit:cover;margin:0 auto 1rem}.testimonials .testimonial-card .testimonial-placeholder{font-size:80px;color:#666;margin-bottom:1rem}.testimonials .testimonial-card blockquote{margin:0 0 1rem;font-style:italic;color:#333}.testimonials .testimonial-card blockquote p{margin:0}.testimonials .testimonial-card .testimonial-meta .customer-name{font-weight:700;color:#333;margin-bottom:.5rem}.testimonials .testimonial-card .testimonial-meta .rating{color:#f1c40f;font-size:1rem}.testimonials .testimonial-card .testimonial-meta .rating .fa-star,.testimonials .testimonial-card .testimonial-meta .rating .far.fa-star{margin:0 2px}.local-partner{padding:80px 0;background-color:#333;background-size:cover;background-position:center;position:relative;color:#fff;text-align:center}.local-partner::before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.65);z-index:1}.local-partner .container{max-width:1200px;margin:0 auto;padding:2rem 1.5rem;position:relative;z-index:2}.local-partner h2{font-size:2rem;margin-bottom:1.5rem;color:#fff;text-shadow:0 2px 4px rgba(0,0,0,.3)}@media (max-width:768px){.local-partner h2{font-size:1.8em}}.local-partner .local-partner-content{max-width:800px;margin:0 auto;font-size:16px;color:#fff;line-height:1.8;text-shadow:0 1px 2px rgba(0,0,0,.2)}.local-partner .local-partner-content p{margin-bottom:1.5rem}.local-partner .consultation-btn{display:inline-block;background-color:#c62828;color:#fff;padding:1rem 1.5rem;border-radius:4px;font-weight:700;margin-top:1.5rem;text-decoration:none;transition:background-color .3s ease}.local-partner .consultation-btn:hover{background-color:rgb(155.5714285714,31.4285714286,31.4285714286)}.final-cta{padding:4rem 0;background:linear-gradient(135deg,#007bff 0,rgb(0,73.8,153) 100%);color:#fff;text-align:center}.final-cta .container{max-width:1200px;margin:0 auto;padding:0 1.5rem}.final-cta .cta-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;align-items:center}@media (max-width:768px){.final-cta .cta-grid{grid-template-columns:1fr;gap:1.5rem}}.final-cta .cta-content{text-align:left}@media (max-width:768px){.final-cta .cta-content{text-align:center}}.final-cta .cta-content h2{font-size:2rem;margin-bottom:1rem;font-weight:700;color:#fff}.final-cta .cta-content .supporting-text{font-size:1.25rem;margin-bottom:2rem;line-height:1.5}.final-cta .cta-content .cta-button{display:inline-block;background-color:#fff;color:#007bff;font-weight:700;font-size:1.1rem;padding:1rem 2rem;border-radius:4px;text-decoration:none;transition:all .3s ease;margin-bottom:2rem;box-shadow:0 4px 12px rgba(0,0,0,.1)}.final-cta .cta-content .cta-button:hover{transform:translateY(-3px);box-shadow:0 6px 16px rgba(0,0,0,.15)}.final-cta .cta-content .contact-info{margin-top:1.5rem}.final-cta .cta-content .contact-info .contact-item{display:inline-block;margin:0 1.5rem;font-size:1.1rem}.final-cta .cta-content .contact-info .contact-item i{margin-right:.5rem}.final-cta .cta-content .contact-info .contact-item a{color:#fff;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.3);transition:border-color .3s ease}.final-cta .cta-content .contact-info .contact-item a:hover{border-color:#fff}@media (max-width:768px){.final-cta .cta-content .contact-info .contact-item{display:block;margin:.5rem 0}}.final-cta .cta-form{background:rgba(255,255,255,.95);padding:1.5rem;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,.1);color:#333}.final-cta .cta-form h3{font-size:1.5rem;margin-bottom:1rem;color:#333}.final-cta .cta-form .wpcf7-form p{margin-bottom:0}.final-cta .cta-form .wpcf7-form .form-row{display:flex;flex-wrap:wrap;gap:1rem;margin-bottom:1rem}.final-cta .cta-form .wpcf7-form .form-row.form-row-submit{justify-content:flex-start;margin-top:1.5rem}.final-cta .cta-form .wpcf7-form .form-col{flex:1;min-width:0}.final-cta .cta-form .wpcf7-form .form-col.form-col-full{flex:0 0 100%}.final-cta .cta-form .wpcf7-form label{display:block;font-size:.9rem;margin-bottom:.5rem;color:#333;font-weight:500;text-align:left}.final-cta .cta-form .wpcf7-form input[type=email],.final-cta .cta-form .wpcf7-form input[type=tel],.final-cta .cta-form .wpcf7-form input[type=text],.final-cta .cta-form .wpcf7-form textarea{width:100%;padding:10px;border:1px solid #ccc;border-radius:0;font-size:1rem;background:#fff;color:#333;box-sizing:border-box}.final-cta .cta-form .wpcf7-form input[type=email]:focus,.final-cta .cta-form .wpcf7-form input[type=tel]:focus,.final-cta .cta-form .wpcf7-form input[type=text]:focus,.final-cta .cta-form .wpcf7-form textarea:focus{outline:0;border-color:#007bff;box-shadow:none}.final-cta .cta-form .wpcf7-form input[type=email]::placeholder,.final-cta .cta-form .wpcf7-form input[type=tel]::placeholder,.final-cta .cta-form .wpcf7-form input[type=text]::placeholder,.final-cta .cta-form .wpcf7-form textarea::placeholder{color:#999;font-size:.9rem}.final-cta .cta-form .wpcf7-form textarea{min-height:100px;resize:vertical}.final-cta .cta-form .wpcf7-form input[type=submit]{display:inline-block;background-color:#007bff;color:#fff;font-weight:700;font-size:1rem;padding:10px 20px;border:none;border-radius:4px;cursor:pointer;transition:background-color .3s ease}.final-cta .cta-form .wpcf7-form input[type=submit]:hover{background-color:rgb(0,98.4,204)}.final-cta .cta-form .wpcf7-form .wpcf7-response-output{margin-top:1rem;font-size:.9rem;color:#333}@media (max-width:768px){.final-cta .cta-form .form-row{flex-direction:column;gap:.5rem}.final-cta .cta-form .form-col{flex:0 0 100%}}@media (max-width:768px){.final-cta h2{font-size:1.75rem}.final-cta .supporting-text{font-size:1rem}}.site-footer{background-color:#222;color:#fff;padding:40px 20px}.footer-container{max-width:1200px;margin:0 auto}.footer-columns{display:grid;grid-template-columns:3fr 1fr 2fr;gap:30px;margin-bottom:40px}.footer-column h3{font-size:1.5em;margin-bottom:15px}.footer-column .column-content{font-size:.9em;line-height:1.6}.social-links{list-style:none;padding:0;display:flex;gap:15px}.social-links li{display:inline-block}.social-links a{color:#fff;font-size:1.2em;transition:color .3s}.social-links a:hover{color:#4caf50}.footer-bottom{text-align:center;border-top:1px solid #444;padding-top:20px;font-size:.9em}.footer-bottom a{color:#4caf50;text-decoration:none;margin:0 10px}.footer-bottom a:hover{text-decoration:underline}.footer-column .contact-email,.footer-column .contact-phone{font-size:.9em;margin-top:10px}.footer-column .contact-email a,.footer-column .contact-phone a{color:#fff;text-decoration:none;display:flex;align-items:center;gap:8px;transition:color .3s}.footer-column .contact-email a:hover,.footer-column .contact-phone a:hover{color:#4caf50}.footer-column .contact-email i,.footer-column .contact-phone i{font-size:1.1em}@media (max-width:768px){.footer-columns{grid-template-columns:1fr}}
/*# sourceMappingURL=style.css.map */
```

# assets/css/style.css.map

```map
{"version":3,"sources":["base/_reset.scss","abstracts/_variables.scss","layouts/_header.scss","sections/_hero.scss","sections/_why-choose-us.scss","sections/_companies-trust.scss","abstracts/_mixins.scss","sections/_services.scss","sections/_testimonials.scss","sections/_local-partner.scss","sections/_final-cta.scss","layouts/_footer.scss"],"names":[],"mappings":"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","file":"style.css","sourcesContent":["@import '../abstracts/variables';\n\n/* 1. Use a more-intuitive box-sizing model */\n*,\n*::before,\n*::after {\n  box-sizing: border-box;\n}\n\n/* 2. Remove default margin */\n* {\n  margin: 0;\n}\n\n/* 3. Enable keyword animations */\n@media (prefers-reduced-motion: no-preference) {\n  html {\n    interpolate-size: allow-keywords;\n  }\n}\n\nbody {\n  /* 4. Add accessible line-height */\n  line-height: 1.5;\n  /* 5. Improve text rendering */\n  -webkit-font-smoothing: antialiased;\n  /* setting google fonts */\n  font-family: $font-primary;\n  background-color: $background;\n}\n\n/* 6. Improve media defaults */\nimg,\npicture,\nvideo,\ncanvas,\nsvg {\n  display: block;\n  max-width: 100%;\n}\n\n/* 7. Inherit fonts for form controls */\ninput,\nbutton,\ntextarea,\nselect {\n  font: inherit;\n}\n\n/* 8. Avoid text overflows */\np,\nh1,\nh2,\nh3,\nh4,\nh5,\nh6 {\n  overflow-wrap: break-word;\n}\n\n/* 9. Improve line wrapping */\np {\n  text-wrap: pretty;\n}\nh1,\nh2,\nh3,\nh4,\nh5,\nh6 {\n  text-wrap: balance;\n}\n\n/*\n    10. Create a root stacking context\n  */\n#root,\n#__next {\n  isolation: isolate;\n}\n","// Color Palette\n$primary: #007bff;\n$secondary: #4caa48;\n$background: #f8f9fa;\n$background-alt: #f1f3f5;\n$text-primary: #333333; \n$text-secondary: #666666; \n$overlay: rgba(0, 0, 0, 0.3); \n$dark-bg: #222;\n$light-bg: #f8f9fa;\n$white: #fff;\n$border-color: #444;\n$brand-color: #4CAF50;\n$container-width: 1200px;\n\n// Spacing\n$space-xs: 0.5rem; // 8px\n$space-sm: 1rem; // 16px\n$space-md: 1.5rem; // 24px\n$space-lg: 2rem; // 32px\n$space-xl: 4rem; // 64px\n$space-xxl: 6rem; // 96px\n$gap-lg: 2rem; // 32px\n$gap-md: 1.5rem; // 24px\n$gap-sm: 1rem; // 16px\n\n// Typography\n$font-primary: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI',\n  Roboto, sans-serif;\n$font-secondary: 'Georgia', serif;\n$font-size-base: 16px;\n$font-size-sm: 0.875rem; // 14px\n$font-size-md: 1rem; // 16px\n$font-size-lg: 1.25rem; // 20px\n$font-size-xl: 2rem; // 32px\n$font-size-xxl: 3rem; // 48px\n$font-weight-light: 300;\n$font-weight-regular: 400;\n$font-weight-bold: 700;\n$line-height-base: 1.5;\n$line-height-heading: 1.2;\n$icon-size: 2rem;","@import '../abstracts/variables';\n/*------------------------------------*\\\n#HEADER STYLES\n\\*------------------------------------*/\n\n/* Request a Quote Bar */\n.request-quote-bar {\n  background: $secondary;\n  text-align: center;\n  padding: 10px 0;\n  margin-bottom: 15px;\n  position: relative;\n  z-index: 101;\n}\n\n.request-quote-link {\n  color: #fff;\n  // font-weight: bold;\n  text-decoration: none;\n  font-size: 1rem;\n}\n.site-header {\n  background: #fff;\n  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);\n  padding: 0px 0 15px 0;\n  position: sticky;\n  top: 0;\n  z-index: 100;\n}\n\n.header-container {\n  display: flex;\n  align-items: center;\n  justify-content: space-between;\n  max-width: 1200px;\n  margin: 0 auto;\n  padding: 0 20px;\n}\n\n.logo {\n  flex: 0 0 auto;\n\n  .custom-logo {\n    max-height: 50px;\n    width: auto;\n  }\n\n  .site-title {\n    font-size: 1.5rem;\n    color: #333;\n    text-decoration: none;\n  }\n}\n\n/*------------------------------------*\\\n  #NAV STYLES\n  \\*------------------------------------*/\n.nav-toggle {\n  display: none;\n}\n\n.nav-toggle-label {\n  display: none;\n  cursor: pointer;\n  width: 30px;\n  height: 20px;\n  position: relative;\n  z-index: 101;\n\n  span {\n    display: block;\n    height: 3px;\n    background: #333;\n    margin-bottom: 5px;\n    transition: all 0.3s;\n  }\n}\n\n.nav-toggle:checked ~ .primary-nav {\n  display: block;\n}\n\n.nav-toggle:checked + .nav-toggle-label {\n  span:nth-child(1) {\n    transform: rotate(45deg) translate(5px, 5px);\n  }\n  span:nth-child(2) {\n    opacity: 0;\n  }\n  span:nth-child(3) {\n    transform: rotate(-45deg) translate(7px, -7px);\n  }\n}\n\n.primary-nav {\n  flex: 1;\n  text-align: center;\n\n  .nav-menu {\n    list-style: none;\n    margin: 0;\n    padding: 0;\n    display: flex;\n    justify-content: center;\n    gap: 20px;\n\n    li {\n      position: relative;\n\n      a,\n      .services-link-label {\n        color: #333;\n        text-decoration: none;\n        font-size: 1rem;\n        font-weight: 500;\n        padding: 20px;\n        transition: color 0.3s;\n        cursor: pointer;\n\n        &:hover {\n          color: #007bff;\n        }\n      }\n\n      &.has-mega-menu {\n        .mega-menu-toggle {\n          display: none;\n        }\n\n        .mega-menu-toggle-label {\n          display: inline-block;\n          cursor: pointer;\n          font-size: 1.2rem;\n          color: #333;\n          margin-left: 5px;\n        }\n\n        .services-icon {\n          margin-left: 5px;\n          font-size: 0.9rem;\n        }\n\n        .mega-menu {\n          display: none;\n          position: absolute;\n          top: 100%;\n          left: 50%;\n          transform: translateX(-50%);\n          background: #fff;\n          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);\n          padding: 15px;\n          border-radius: 5px;\n          min-width: 200px;\n          z-index: 100;\n\n          a {\n            display: block;\n            padding: 10px;\n            color: #333;\n            text-decoration: none;\n            font-size: 0.95rem;\n            border-bottom: 1px solid #eee;\n\n            &:last-child {\n              border-bottom: none;\n            }\n\n            &:hover {\n              color: #007bff;\n            }\n          }\n        }\n\n        .mega-menu-toggle:checked ~ .mega-menu {\n          display: block;\n        }\n      }\n    }\n  }\n}\n\n.contact-info {\n  flex: 0 0 auto;\n  text-align: right;\n\n  .phone-number {\n    color: #333;\n    font-size: 1rem;\n    font-weight: 600;\n    text-decoration: none;\n    margin-right: 10px;\n\n    i {\n      margin-right: 5px;\n    }\n\n    &:hover {\n      color: #007bff;\n    }\n  }\n\n  .language-note {\n    font-size: 0.85rem;\n    color: #666;\n  }\n}\n\n/*------------------------------------*\\\n  #MOBILE NAV  STYLES\n\\*------------------------------------*/\n\n@media (max-width: 768px) {\n  .request-quote-bar {\n    margin-bottom: 20px;\n  }\n  .logo {\n    .custom-logo {\n      max-height: 60px;\n    }\n  }\n  .header-container {\n    flex-direction: column;\n    align-items: center;\n    justify-content: center;\n  }\n\n  .nav-toggle-label {\n    display: block;\n    position: absolute;\n    top: 90px;\n    right: 20px;\n    transform: translateY(-50%);\n    width: 20px;\n\n    span {\n      display: block;\n      height: 3px;\n      background: #222;\n      margin-bottom: 5px;\n      transition: all 0.3s;\n    }\n  }\n\n  .primary-nav {\n    display: none;\n    width: 100%;\n    text-align: left;\n    padding: 20px 0;\n\n    .nav-menu {\n      flex-direction: column;\n      gap: 20px;\n      position: relative;\n\n      li {\n        a {\n          display: block;\n          padding: 15px 20px;\n          border-bottom: 1px solid #eee;\n        }\n\n        &.has-mega-menu {\n          .mega-menu-toggle {\n            display: none;\n          }\n\n          .mega-menu-toggle-label {\n            display: inline-block;\n            position: absolute;\n            top: 28px;\n            left: 80px;\n            vertical-align: middle;\n            margin-left: 8px;\n            // position: relative;\n            // top: 2px;\n            font-size: 1.5rem;\n            background: none;\n            border: none;\n            cursor: pointer;\n          }\n\n          .mega-menu {\n            display: none;\n            position: static;\n            transform: none;\n            box-shadow: none;\n            background: #f8f8f8;\n            padding: 0 20px;\n\n            a {\n              padding: 10px 0;\n              border-bottom: 1px solid #ddd;\n\n              &:last-child {\n                border-bottom: none;\n              }\n            }\n          }\n\n          .mega-menu-toggle:checked ~ .mega-menu {\n            display: block;\n            margin-top: 10px;\n            margin-left: 20px;\n          }\n        }\n      }\n    }\n  }\n\n  .contact-info {\n    margin-top: 20px;\n  }\n}\n","@import '../abstracts/variables';\n\n/*------------------------------------*\\\n  #HERO STYLES\n\\*------------------------------------*/\n.hero {\n  position: relative;\n  text-align: center;\n  padding: $space-xl $space-sm;\n  height: 100vh;\n  min-height: 100vh;\n  display: flex;\n  flex-direction: column;\n  justify-content: center;\n  background-size: cover;\n  background-position: center;\n  will-change: background-position;\n  background-repeat: no-repeat;\n  color: #fff;\n\n  // Ensure the background image scales smoothly\n  background-attachment: scroll; // Override any fixed attachment\n\n  // Optional: Add a fallback background color in case the image fails to load\n  background-color: $text-secondary;\n\n  .hero-content {\n    position: relative;\n    z-index: 2; // Ensure content is above any pseudo-elements or overlays\n\n    h1 {\n      font-size: $font-size-xxl;\n      margin-bottom: $space-sm;\n      text-shadow: 2px 3px 4px rgba(0, 0, 0, 0.4);\n    }\n\n    p {\n      font-size: $font-size-lg;\n      margin-bottom: $space-lg;\n      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);\n    }\n\n    .cta {\n      display: inline-block;\n      padding: $space-sm $space-md;\n      background: $primary;\n      color: $background;\n      text-decoration: none;\n      border-radius: 5px;\n      transition: background 0.3s ease;\n\n      &:hover {\n        background: darken($primary, 10%);\n      }\n    }\n  }\n}\n","@import '../abstracts/variables';\n\n.why-choose-us {\n    padding: $space-md $space-sm;\n\n    .container {\n        max-width: $container-width;\n        margin: 0 auto;\n        text-align: center;\n    }\n\n    h2 {\n        font-size: $font-size-xl;\n        margin-bottom: $space-md;\n        color: $text-primary;\n\n        @media (max-width: 768px) {\n            font-size: 1.8em;\n        }\n    }\n\n    .benefits-list {\n        list-style: none;\n        padding: 0;\n        display: grid;\n        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));\n        gap: $gap-lg;\n\n        @media (max-width: 768px) {\n            grid-template-columns: 1fr;\n        }\n    }\n\n    .benefit-item {\n        position: relative;\n        display: flex;\n        align-items: center;\n        justify-content: center;\n        min-width: 260px;\n        min-height: 220px;\n        padding: 32px 20px;\n        border-radius: 18px;\n        box-shadow: 0 4px 24px rgba(0,0,0,0.08), 0 1.5px 6px rgba(0,0,0,0.04);\n        background-size: cover;\n        background-position: center;\n        background-repeat: no-repeat;\n        overflow: hidden;\n        color: $text-primary;\n        text-align: center;\n        transition: box-shadow 0.2s, transform 0.2s;\n        z-index: 1;\n\n        &:hover {\n            box-shadow: 0 8px 32px rgba(0,0,0,0.14), 0 3px 12px rgba(0,0,0,0.08);\n            transform: translateY(-4px) scale(1.03);\n        }\n\n        &::before {\n            content: '';\n            position: absolute;\n            inset: 0;\n            background: rgba(0,0,0,0.32); // dark overlay for readability\n            z-index: 1;\n        }\n\n        > span {\n            position: relative;\n            z-index: 2;\n            font-size: 1.25rem;\n            font-weight: 600;\n            color: #fff;\n            text-shadow: 0 2px 8px rgba(0,0,0,0.18);\n            width: 100%;\n            display: block;\n        }\n    }\n\n    .benefit-icon {\n        display: none;\n    }\n}\n\n@media (min-width: 1024px) {\n  .why-choose-us .benefit-icon {\n    width: 80px;\n    height: 80px;\n    max-width: none;\n    max-height: none;\n    display: block;\n    margin-bottom: 16px;\n  }\n  .why-choose-us .benefit-item {\n    font-size: 1.35rem;\n    padding: 24px 12px;\n  }\n  .why-choose-us .benefit-item > span {\n    font-size: 1.35rem;\n    line-height: 1.5;\n    font-weight: 500;\n    padding: 0 8px;\n  }\n}","@import '../abstracts/variables';\n@import '../abstracts/mixins';\n\n.companies-trust-us {\n  padding: $space-lg 0;\n\n  .container {\n    @include container;\n  }\n\n  h2 {\n    text-align: center;\n    margin-bottom: $space-lg;\n    color: $text-primary;\n    font-size: $font-size-xl;\n  }\n\n  .companies-grid {\n    display: grid;\n    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));\n    gap: $space-md;\n    justify-items: center;\n    align-items: center;\n  }\n\n  .company-logo {\n    img {\n      max-width: 120px;\n      height: auto;\n      filter: grayscale(100%);\n      opacity: 0.7;\n      transition: filter 0.3s ease, opacity 0.3s ease;\n\n      &:hover {\n        filter: grayscale(0%);\n        opacity: 1;\n      }\n    }\n  }\n}\n","@mixin container {\n  max-width: 1200px;\n  margin: 0 auto;\n  padding: 0 $space-sm;\n}\n","@import '../abstracts/variables';\n\n/*------------------------------------*\\\n  #SERVICES SECTION STYLES\n\\*------------------------------------*/\n.services {\n  // min-height: 100vh;\n  // padding: 50px 20px;\n  margin: 80px 0;\n  text-align: center;\n\n  h2 {\n    font-size: 2rem;\n    margin-bottom: 30px;\n  }\n\n  .service-list {\n    display: flex;\n    flex-wrap: wrap;\n    justify-content: center;\n    gap: 20px;\n  }\n\n  .service {\n    flex: 1 1 300px;\n    max-width: 300px;\n    padding: 0;\n    background: $background-alt;\n    border-radius: 5px;\n    overflow: hidden;\n\n    .service-image {\n      width: 100%;\n      height: 180px;\n      object-fit: cover;\n      display: block;\n      border-radius: 0;\n    }\n\n    .service-content {\n      padding: 20px;\n\n      h3 {\n        font-size: 1.5rem;\n        margin-bottom: 10px;\n      }\n\n      p {\n        font-size: 1rem;\n        margin-bottom: 15px;\n      }\n\n      .service-link {\n        display: inline-block;\n        padding: 8px 15px;\n        background: #007bff;\n        color: white;\n        text-decoration: none;\n        border-radius: 3px;\n        &:hover {\n          background: #0056b3;\n        }\n      }\n    }\n  }\n}\n","@import '../abstracts/variables';\n\n.testimonials {\n  padding: 80px 0;\n\n  .container {\n    max-width: 1200px;\n    margin: 0 auto;\n    padding: 0 $space-sm;\n  }\n\n  h2 {\n    text-align: center;\n    font-size: $font-size-xl;\n    margin-bottom: $space-lg;\n    color: $text-primary;\n  }\n\n  .testimonials-grid {\n    display: grid;\n    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));\n    gap: $space-lg;\n  }\n\n  .testimonial-card {\n    background: $background-alt;\n    border-radius: 8px;\n    padding: $space-md;\n    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);\n    text-align: center;\n    transition: transform 0.3s ease;\n\n    &:hover {\n      transform: translateY(-5px);\n    }\n\n    .testimonial-image {\n      width: 80px;\n      height: 80px;\n      border-radius: 50%;\n      object-fit: cover;\n      margin: 0 auto $space-sm;\n    }\n\n    .testimonial-placeholder {\n      font-size: 80px;\n      color: $text-secondary;\n      margin-bottom: $space-sm;\n    }\n\n    blockquote {\n      margin: 0 0 $space-sm;\n      font-style: italic;\n      color: $text-primary;\n\n      p {\n        margin: 0;\n      }\n    }\n\n    .testimonial-meta {\n      .customer-name {\n        font-weight: bold;\n        color: $text-primary;\n        margin-bottom: $space-xs;\n      }\n\n      .rating {\n        color: #f1c40f;\n        font-size: 1rem;\n\n        .fa-star,\n        .far.fa-star {\n          margin: 0 2px;\n        }\n      }\n    }\n  }\n}\n","@import '../abstracts/variables';\n\n.local-partner {\n  padding: 80px 0;  \n  background-color: #333; // Fallback color if image fails to load\n  background-size: cover;\n  background-position: center;\n  position: relative;\n  color: white;\n  text-align: center;\n  \n  &::before {\n    content: '';\n    position: absolute;\n    top: 0;\n    left: 0;\n    width: 100%;\n    height: 100%;\n    background: rgba(0, 0, 0, 0.65); // Dark overlay\n    z-index: 1;\n  }\n\n  .container {\n    max-width: $container-width;\n    margin: 0 auto;\n    padding: $space-lg $space-md;\n    position: relative;\n    z-index: 2; // Place above the overlay\n  }\n\n  h2 {\n    font-size: $font-size-xl;\n    margin-bottom: $space-md;\n    color: white;\n    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);\n\n    @media (max-width: 768px) {\n      font-size: 1.8em;\n    }\n  }\n\n  .local-partner-content {\n    max-width: 800px;\n    margin: 0 auto;\n    font-size: $font-size-base;\n    color: white;\n    line-height: 1.8;\n    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);\n\n    p {\n      margin-bottom: $gap-md;\n    }\n  }\n  \n  // Add a CTA button similar to the one in the image\n  .consultation-btn {\n    display: inline-block;\n    background-color: #c62828;\n    color: white;\n    padding: $space-sm $space-md;\n    border-radius: 4px;\n    font-weight: bold;\n    margin-top: $space-md;\n    text-decoration: none;\n    transition: background-color 0.3s ease;\n    \n    &:hover {\n      background-color: darken(#c62828, 10%);\n    }\n  }\n}","@import '../abstracts/variables';\n\n.final-cta {\n  padding: $space-xl 0;\n  background: linear-gradient(135deg, $primary 0%, darken($primary, 20%) 100%);\n  color: white;\n  text-align: center;\n\n  .container {\n    max-width: $container-width;\n    margin: 0 auto;\n    padding: 0 $space-md;\n  }\n\n  .cta-grid {\n    display: grid;\n    grid-template-columns: 1fr 1fr;\n    gap: $space-lg;\n    align-items: center;\n\n    @media (max-width: 768px) {\n      grid-template-columns: 1fr;\n      gap: $space-md;\n    }\n  }\n\n  .cta-content {\n    text-align: left;\n\n    @media (max-width: 768px) {\n      text-align: center;\n    }\n\n    h2 {\n      font-size: $font-size-xl;\n      margin-bottom: $space-sm;\n      font-weight: $font-weight-bold;\n      color: white;\n    }\n\n    .supporting-text {\n      font-size: $font-size-lg;\n      margin-bottom: $space-lg;\n      line-height: 1.5;\n    }\n\n    .cta-button {\n      display: inline-block;\n      background-color: white;\n      color: $primary;\n      font-weight: $font-weight-bold;\n      font-size: 1.1rem;\n      padding: $space-sm $space-lg;\n      border-radius: 4px;\n      text-decoration: none;\n      transition: all 0.3s ease;\n      margin-bottom: $space-lg;\n      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);\n\n      &:hover {\n        transform: translateY(-3px);\n        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);\n      }\n    }\n\n    .contact-info {\n      margin-top: $space-md;\n\n      .contact-item {\n        display: inline-block;\n        margin: 0 $space-md;\n        font-size: 1.1rem;\n\n        i {\n          margin-right: $space-xs;\n        }\n\n        a {\n          color: white;\n          text-decoration: none;\n          border-bottom: 1px solid rgba(255, 255, 255, 0.3);\n          transition: border-color 0.3s ease;\n\n          &:hover {\n            border-color: white;\n          }\n        }\n      }\n\n      @media (max-width: 768px) {\n        .contact-item {\n          display: block;\n          margin: $space-xs 0;\n        }\n      }\n    }\n  }\n\n  .cta-form {\n    background: rgba(255, 255, 255, 0.95);\n    padding: $space-md;\n    border-radius: 8px;\n    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);\n    color: $text-primary;\n\n    h3 {\n      font-size: 1.5rem;\n      margin-bottom: $space-sm;\n      color: $text-primary;\n    }\n\n    .wpcf7-form {\n      p {\n        margin-bottom: 0; // Remove default paragraph margins\n      }\n\n      .form-row {\n        display: flex;\n        flex-wrap: wrap;\n        gap: $space-sm;\n        margin-bottom: $space-sm;\n\n        &.form-row-submit {\n          justify-content: flex-start;\n          margin-top: $space-md;\n        }\n      }\n\n      .form-col {\n        flex: 1;\n        min-width: 0; // Prevent overflow in flex\n\n        &.form-col-full {\n          flex: 0 0 100%;\n        }\n      }\n\n      label {\n        display: block;\n        font-size: 0.9rem;\n        margin-bottom: $space-xs;\n        color: $text-primary;\n        font-weight: 500;\n        text-align: left; // Left-align labels\n      }\n\n      input[type=\"text\"],\n      input[type=\"email\"],\n      input[type=\"tel\"],\n      textarea {\n        width: 100%;\n        padding: 10px;\n        border: 1px solid #ccc;\n        border-radius: 0;\n        font-size: 1rem;\n        background: #fff;\n        color: $text-primary;\n        box-sizing: border-box;\n\n        &:focus {\n          outline: none;\n          border-color: $primary;\n          box-shadow: none;\n        }\n\n        &::placeholder {\n          color: #999;\n          font-size: 0.9rem;\n        }\n      }\n\n      textarea {\n        min-height: 100px;\n        resize: vertical;\n      }\n\n      input[type=\"submit\"] {\n        display: inline-block;\n        background-color: $primary;\n        color: white;\n        font-weight: $font-weight-bold;\n        font-size: 1rem;\n        padding: 10px 20px;\n        border: none;\n        border-radius: 4px;\n        cursor: pointer;\n        transition: background-color 0.3s ease;\n\n        &:hover {\n          background-color: darken($primary, 10%);\n        }\n      }\n\n      .wpcf7-response-output {\n        margin-top: $space-sm;\n        font-size: 0.9rem;\n        color: $text-primary;\n      }\n    }\n\n    @media (max-width: 768px) {\n      .form-row {\n        flex-direction: column;\n        gap: $space-xs;\n      }\n\n      .form-col {\n        flex: 0 0 100%;\n      }\n    }\n  }\n\n  @media (max-width: 768px) {\n    h2 {\n      font-size: 1.75rem;\n    }\n\n    .supporting-text {\n      font-size: 1rem;\n    }\n  }\n}","@import '../abstracts/variables';\n@import '../abstracts/mixins';\n\n/*------------------------------------*\\\n  #FOOTER STYLES\n\\*------------------------------------*/\n.site-footer {\n  background-color: #222;\n  color: #fff;\n  padding: 40px 20px;\n}\n\n.footer-container {\n  max-width: 1200px;\n  margin: 0 auto;\n}\n\n.footer-columns {\n  display: grid;\n  // grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));\n  grid-template-columns: 3fr 1fr 2fr;\n  gap: 30px;\n  margin-bottom: 40px;\n}\n\n.footer-column h3 {\n  font-size: 1.5em;\n  margin-bottom: 15px;\n}\n\n.footer-column .column-content {\n  font-size: 0.9em;\n  line-height: 1.6;\n}\n\n.social-links {\n  list-style: none;\n  padding: 0;\n  display: flex;\n  gap: 15px;\n}\n\n.social-links li {\n  display: inline-block;\n}\n\n.social-links a {\n  color: #fff;\n  font-size: 1.2em;\n  transition: color 0.3s;\n}\n\n.social-links a:hover {\n  color: #4CAF50; /* Color de tu marca */\n}\n\n.footer-bottom {\n  text-align: center;\n  border-top: 1px solid #444;\n  padding-top: 20px;\n  font-size: 0.9em;\n}\n\n.footer-bottom a {\n  color: #4CAF50;\n  text-decoration: none;\n  margin: 0 10px;\n}\n\n.footer-bottom a:hover {\n  text-decoration: underline;\n}\n\n.footer-column .contact-phone,\n.footer-column .contact-email {\n    font-size: 0.9em;\n    margin-top: 10px;\n}\n\n.footer-column .contact-phone a,\n.footer-column .contact-email a {\n    color: #fff;\n    text-decoration: none;\n    display: flex;\n    align-items: center;\n    gap: 8px;\n    transition: color 0.3s;\n}\n\n.footer-column .contact-phone a:hover,\n.footer-column .contact-email a:hover {\n    color: #4CAF50; /* Color de tu marca */\n}\n\n.footer-column .contact-phone i,\n.footer-column .contact-email i {\n    font-size: 1.1em;\n}\n\n@media (max-width: 768px) {\n  .footer-columns {\n      grid-template-columns: 1fr;\n  }\n}\n"]}
```

# assets/js/src/parallax.js

```js
document.addEventListener('DOMContentLoaded', function () {
  const hero = document.querySelector('.hero');
  if (hero && window.innerWidth > 768) {
    // Disable parallax on mobile
    let lastScroll = 0;
    let ticking = false;

    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(function () {
          const scrollPosition = window.pageYOffset;
          const offset = scrollPosition * 0.4; // Adjust speed here
          hero.style.backgroundPositionY = `${offset}px`;
          ticking = false;
        });
        ticking = true;
      }
    });
  }
});

```

# assets/scss/abstracts/_mixins.scss

```scss
@mixin container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 $space-sm;
}

```

# assets/scss/abstracts/_variables.scss

```scss
// Color Palette
$primary: #007bff;
$secondary: #4caa48;
$background: #f8f9fa;
$background-alt: #f1f3f5;
$text-primary: #333333; 
$text-secondary: #666666; 
$overlay: rgba(0, 0, 0, 0.3); 
$dark-bg: #222;
$light-bg: #f8f9fa;
$white: #fff;
$border-color: #444;
$brand-color: #4CAF50;
$container-width: 1200px;

// Spacing
$space-xs: 0.5rem; // 8px
$space-sm: 1rem; // 16px
$space-md: 1.5rem; // 24px
$space-lg: 2rem; // 32px
$space-xl: 4rem; // 64px
$space-xxl: 6rem; // 96px
$gap-lg: 2rem; // 32px
$gap-md: 1.5rem; // 24px
$gap-sm: 1rem; // 16px

// Typography
$font-primary: 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI',
  Roboto, sans-serif;
$font-secondary: 'Georgia', serif;
$font-size-base: 16px;
$font-size-sm: 0.875rem; // 14px
$font-size-md: 1rem; // 16px
$font-size-lg: 1.25rem; // 20px
$font-size-xl: 2rem; // 32px
$font-size-xxl: 3rem; // 48px
$font-weight-light: 300;
$font-weight-regular: 400;
$font-weight-bold: 700;
$line-height-base: 1.5;
$line-height-heading: 1.2;
$icon-size: 2rem;
```

# assets/scss/base/_reset.scss

```scss
@import '../abstracts/variables';

/* 1. Use a more-intuitive box-sizing model */
*,
*::before,
*::after {
  box-sizing: border-box;
}

/* 2. Remove default margin */
* {
  margin: 0;
}

/* 3. Enable keyword animations */
@media (prefers-reduced-motion: no-preference) {
  html {
    interpolate-size: allow-keywords;
  }
}

body {
  /* 4. Add accessible line-height */
  line-height: 1.5;
  /* 5. Improve text rendering */
  -webkit-font-smoothing: antialiased;
  /* setting google fonts */
  font-family: $font-primary;
  background-color: $background;
}

/* 6. Improve media defaults */
img,
picture,
video,
canvas,
svg {
  display: block;
  max-width: 100%;
}

/* 7. Inherit fonts for form controls */
input,
button,
textarea,
select {
  font: inherit;
}

/* 8. Avoid text overflows */
p,
h1,
h2,
h3,
h4,
h5,
h6 {
  overflow-wrap: break-word;
}

/* 9. Improve line wrapping */
p {
  text-wrap: pretty;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  text-wrap: balance;
}

/*
    10. Create a root stacking context
  */
#root,
#__next {
  isolation: isolate;
}

```

# assets/scss/layouts/_footer.scss

```scss
@import '../abstracts/variables';
@import '../abstracts/mixins';

/*------------------------------------*\
  #FOOTER STYLES
\*------------------------------------*/
.site-footer {
  background-color: #222;
  color: #fff;
  padding: 40px 20px;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
}

.footer-columns {
  display: grid;
  // grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-template-columns: 3fr 1fr 2fr;
  gap: 30px;
  margin-bottom: 40px;
}

.footer-column h3 {
  font-size: 1.5em;
  margin-bottom: 15px;
}

.footer-column .column-content {
  font-size: 0.9em;
  line-height: 1.6;
}

.social-links {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 15px;
}

.social-links li {
  display: inline-block;
}

.social-links a {
  color: #fff;
  font-size: 1.2em;
  transition: color 0.3s;
}

.social-links a:hover {
  color: #4CAF50; /* Color de tu marca */
}

.footer-bottom {
  text-align: center;
  border-top: 1px solid #444;
  padding-top: 20px;
  font-size: 0.9em;
}

.footer-bottom a {
  color: #4CAF50;
  text-decoration: none;
  margin: 0 10px;
}

.footer-bottom a:hover {
  text-decoration: underline;
}

.footer-column .contact-phone,
.footer-column .contact-email {
    font-size: 0.9em;
    margin-top: 10px;
}

.footer-column .contact-phone a,
.footer-column .contact-email a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
}

.footer-column .contact-phone a:hover,
.footer-column .contact-email a:hover {
    color: #4CAF50; /* Color de tu marca */
}

.footer-column .contact-phone i,
.footer-column .contact-email i {
    font-size: 1.1em;
}

@media (max-width: 768px) {
  .footer-columns {
      grid-template-columns: 1fr;
  }
}

```

# assets/scss/layouts/_header.scss

```scss
@import '../abstracts/variables';
/*------------------------------------*\
#HEADER STYLES
\*------------------------------------*/

/* Request a Quote Bar */
.request-quote-bar {
  background: $secondary;
  text-align: center;
  padding: 10px 0;
  margin-bottom: 15px;
  position: relative;
  z-index: 101;
}

.request-quote-link {
  color: #fff;
  // font-weight: bold;
  text-decoration: none;
  font-size: 1rem;
}
.site-header {
  background: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 0px 0 15px 0;
  position: sticky;
  top: 0;
  z-index: 100;
}

.header-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.logo {
  flex: 0 0 auto;

  .custom-logo {
    max-height: 50px;
    width: auto;
  }

  .site-title {
    font-size: 1.5rem;
    color: #333;
    text-decoration: none;
  }
}

/*------------------------------------*\
  #NAV STYLES
  \*------------------------------------*/
.nav-toggle {
  display: none;
}

.nav-toggle-label {
  display: none;
  cursor: pointer;
  width: 30px;
  height: 20px;
  position: relative;
  z-index: 101;

  span {
    display: block;
    height: 3px;
    background: #333;
    margin-bottom: 5px;
    transition: all 0.3s;
  }
}

.nav-toggle:checked ~ .primary-nav {
  display: block;
}

.nav-toggle:checked + .nav-toggle-label {
  span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  span:nth-child(2) {
    opacity: 0;
  }
  span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -7px);
  }
}

.primary-nav {
  flex: 1;
  text-align: center;

  .nav-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;

    li {
      position: relative;

      a,
      .services-link-label {
        color: #333;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 500;
        padding: 20px;
        transition: color 0.3s;
        cursor: pointer;

        &:hover {
          color: #007bff;
        }
      }

      &.has-mega-menu {
        .mega-menu-toggle {
          display: none;
        }

        .mega-menu-toggle-label {
          display: inline-block;
          cursor: pointer;
          font-size: 1.2rem;
          color: #333;
          margin-left: 5px;
        }

        .services-icon {
          margin-left: 5px;
          font-size: 0.9rem;
        }

        .mega-menu {
          display: none;
          position: absolute;
          top: 100%;
          left: 50%;
          transform: translateX(-50%);
          background: #fff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          padding: 15px;
          border-radius: 5px;
          min-width: 200px;
          z-index: 100;

          a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            font-size: 0.95rem;
            border-bottom: 1px solid #eee;

            &:last-child {
              border-bottom: none;
            }

            &:hover {
              color: #007bff;
            }
          }
        }

        .mega-menu-toggle:checked ~ .mega-menu {
          display: block;
        }
      }
    }
  }
}

.contact-info {
  flex: 0 0 auto;
  text-align: right;

  .phone-number {
    color: #333;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    margin-right: 10px;

    i {
      margin-right: 5px;
    }

    &:hover {
      color: #007bff;
    }
  }

  .language-note {
    font-size: 0.85rem;
    color: #666;
  }
}

/*------------------------------------*\
  #MOBILE NAV  STYLES
\*------------------------------------*/

@media (max-width: 768px) {
  .request-quote-bar {
    margin-bottom: 20px;
  }
  .logo {
    .custom-logo {
      max-height: 60px;
    }
  }
  .header-container {
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .nav-toggle-label {
    display: block;
    position: absolute;
    top: 90px;
    right: 20px;
    transform: translateY(-50%);
    width: 20px;

    span {
      display: block;
      height: 3px;
      background: #222;
      margin-bottom: 5px;
      transition: all 0.3s;
    }
  }

  .primary-nav {
    display: none;
    width: 100%;
    text-align: left;
    padding: 20px 0;

    .nav-menu {
      flex-direction: column;
      gap: 20px;
      position: relative;

      li {
        a {
          display: block;
          padding: 15px 20px;
          border-bottom: 1px solid #eee;
        }

        &.has-mega-menu {
          .mega-menu-toggle {
            display: none;
          }

          .mega-menu-toggle-label {
            display: inline-block;
            position: absolute;
            top: 28px;
            left: 80px;
            vertical-align: middle;
            margin-left: 8px;
            // position: relative;
            // top: 2px;
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
          }

          .mega-menu {
            display: none;
            position: static;
            transform: none;
            box-shadow: none;
            background: #f8f8f8;
            padding: 0 20px;

            a {
              padding: 10px 0;
              border-bottom: 1px solid #ddd;

              &:last-child {
                border-bottom: none;
              }
            }
          }

          .mega-menu-toggle:checked ~ .mega-menu {
            display: block;
            margin-top: 10px;
            margin-left: 20px;
          }
        }
      }
    }
  }

  .contact-info {
    margin-top: 20px;
  }
}

```

# assets/scss/sections/_companies-trust.scss

```scss
@import '../abstracts/variables';
@import '../abstracts/mixins';

.companies-trust-us {
  padding: $space-lg 0;

  .container {
    @include container;
  }

  h2 {
    text-align: center;
    margin-bottom: $space-lg;
    color: $text-primary;
    font-size: $font-size-xl;
  }

  .companies-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: $space-md;
    justify-items: center;
    align-items: center;
  }

  .company-logo {
    img {
      max-width: 120px;
      height: auto;
      filter: grayscale(100%);
      opacity: 0.7;
      transition: filter 0.3s ease, opacity 0.3s ease;

      &:hover {
        filter: grayscale(0%);
        opacity: 1;
      }
    }
  }
}

```

# assets/scss/sections/_final-cta.scss

```scss
@import '../abstracts/variables';

.final-cta {
  padding: $space-xl 0;
  background: linear-gradient(135deg, $primary 0%, darken($primary, 20%) 100%);
  color: white;
  text-align: center;

  .container {
    max-width: $container-width;
    margin: 0 auto;
    padding: 0 $space-md;
  }

  .cta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: $space-lg;
    align-items: center;

    @media (max-width: 768px) {
      grid-template-columns: 1fr;
      gap: $space-md;
    }
  }

  .cta-content {
    text-align: left;

    @media (max-width: 768px) {
      text-align: center;
    }

    h2 {
      font-size: $font-size-xl;
      margin-bottom: $space-sm;
      font-weight: $font-weight-bold;
      color: white;
    }

    .supporting-text {
      font-size: $font-size-lg;
      margin-bottom: $space-lg;
      line-height: 1.5;
    }

    .cta-button {
      display: inline-block;
      background-color: white;
      color: $primary;
      font-weight: $font-weight-bold;
      font-size: 1.1rem;
      padding: $space-sm $space-lg;
      border-radius: 4px;
      text-decoration: none;
      transition: all 0.3s ease;
      margin-bottom: $space-lg;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);

      &:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
      }
    }

    .contact-info {
      margin-top: $space-md;

      .contact-item {
        display: inline-block;
        margin: 0 $space-md;
        font-size: 1.1rem;

        i {
          margin-right: $space-xs;
        }

        a {
          color: white;
          text-decoration: none;
          border-bottom: 1px solid rgba(255, 255, 255, 0.3);
          transition: border-color 0.3s ease;

          &:hover {
            border-color: white;
          }
        }
      }

      @media (max-width: 768px) {
        .contact-item {
          display: block;
          margin: $space-xs 0;
        }
      }
    }
  }

  .cta-form {
    background: rgba(255, 255, 255, 0.95);
    padding: $space-md;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    color: $text-primary;

    h3 {
      font-size: 1.5rem;
      margin-bottom: $space-sm;
      color: $text-primary;
    }

    .wpcf7-form {
      p {
        margin-bottom: 0; // Remove default paragraph margins
      }

      .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: $space-sm;
        margin-bottom: $space-sm;

        &.form-row-submit {
          justify-content: flex-start;
          margin-top: $space-md;
        }
      }

      .form-col {
        flex: 1;
        min-width: 0; // Prevent overflow in flex

        &.form-col-full {
          flex: 0 0 100%;
        }
      }

      label {
        display: block;
        font-size: 0.9rem;
        margin-bottom: $space-xs;
        color: $text-primary;
        font-weight: 500;
        text-align: left; // Left-align labels
      }

      input[type="text"],
      input[type="email"],
      input[type="tel"],
      textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 0;
        font-size: 1rem;
        background: #fff;
        color: $text-primary;
        box-sizing: border-box;

        &:focus {
          outline: none;
          border-color: $primary;
          box-shadow: none;
        }

        &::placeholder {
          color: #999;
          font-size: 0.9rem;
        }
      }

      textarea {
        min-height: 100px;
        resize: vertical;
      }

      input[type="submit"] {
        display: inline-block;
        background-color: $primary;
        color: white;
        font-weight: $font-weight-bold;
        font-size: 1rem;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;

        &:hover {
          background-color: darken($primary, 10%);
        }
      }

      .wpcf7-response-output {
        margin-top: $space-sm;
        font-size: 0.9rem;
        color: $text-primary;
      }
    }

    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
        gap: $space-xs;
      }

      .form-col {
        flex: 0 0 100%;
      }
    }
  }

  @media (max-width: 768px) {
    h2 {
      font-size: 1.75rem;
    }

    .supporting-text {
      font-size: 1rem;
    }
  }
}
```

# assets/scss/sections/_hero.scss

```scss
@import '../abstracts/variables';

/*------------------------------------*\
  #HERO STYLES
\*------------------------------------*/
.hero {
  position: relative;
  text-align: center;
  padding: $space-xl $space-sm;
  height: 100vh;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-size: cover;
  background-position: center;
  will-change: background-position;
  background-repeat: no-repeat;
  color: #fff;

  // Ensure the background image scales smoothly
  background-attachment: scroll; // Override any fixed attachment

  // Optional: Add a fallback background color in case the image fails to load
  background-color: $text-secondary;

  .hero-content {
    position: relative;
    z-index: 2; // Ensure content is above any pseudo-elements or overlays

    h1 {
      font-size: $font-size-xxl;
      margin-bottom: $space-sm;
      text-shadow: 2px 3px 4px rgba(0, 0, 0, 0.4);
    }

    p {
      font-size: $font-size-lg;
      margin-bottom: $space-lg;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .cta {
      display: inline-block;
      padding: $space-sm $space-md;
      background: $primary;
      color: $background;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s ease;

      &:hover {
        background: darken($primary, 10%);
      }
    }
  }
}

```

# assets/scss/sections/_local-partner.scss

```scss
@import '../abstracts/variables';

.local-partner {
  padding: 80px 0;  
  background-color: #333; // Fallback color if image fails to load
  background-size: cover;
  background-position: center;
  position: relative;
  color: white;
  text-align: center;
  
  &::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.65); // Dark overlay
    z-index: 1;
  }

  .container {
    max-width: $container-width;
    margin: 0 auto;
    padding: $space-lg $space-md;
    position: relative;
    z-index: 2; // Place above the overlay
  }

  h2 {
    font-size: $font-size-xl;
    margin-bottom: $space-md;
    color: white;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);

    @media (max-width: 768px) {
      font-size: 1.8em;
    }
  }

  .local-partner-content {
    max-width: 800px;
    margin: 0 auto;
    font-size: $font-size-base;
    color: white;
    line-height: 1.8;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);

    p {
      margin-bottom: $gap-md;
    }
  }
  
  // Add a CTA button similar to the one in the image
  .consultation-btn {
    display: inline-block;
    background-color: #c62828;
    color: white;
    padding: $space-sm $space-md;
    border-radius: 4px;
    font-weight: bold;
    margin-top: $space-md;
    text-decoration: none;
    transition: background-color 0.3s ease;
    
    &:hover {
      background-color: darken(#c62828, 10%);
    }
  }
}
```

# assets/scss/sections/_services.scss

```scss
@import '../abstracts/variables';

/*------------------------------------*\
  #SERVICES SECTION STYLES
\*------------------------------------*/
.services {
  // min-height: 100vh;
  // padding: 50px 20px;
  margin: 80px 0;
  text-align: center;

  h2 {
    font-size: 2rem;
    margin-bottom: 30px;
  }

  .service-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .service {
    flex: 1 1 300px;
    max-width: 300px;
    padding: 0;
    background: $background-alt;
    border-radius: 5px;
    overflow: hidden;

    .service-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
      display: block;
      border-radius: 0;
    }

    .service-content {
      padding: 20px;

      h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
      }

      p {
        font-size: 1rem;
        margin-bottom: 15px;
      }

      .service-link {
        display: inline-block;
        padding: 8px 15px;
        background: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 3px;
        &:hover {
          background: #0056b3;
        }
      }
    }
  }
}

```

# assets/scss/sections/_testimonials.scss

```scss
@import '../abstracts/variables';

.testimonials {
  padding: 80px 0;

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 $space-sm;
  }

  h2 {
    text-align: center;
    font-size: $font-size-xl;
    margin-bottom: $space-lg;
    color: $text-primary;
  }

  .testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: $space-lg;
  }

  .testimonial-card {
    background: $background-alt;
    border-radius: 8px;
    padding: $space-md;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease;

    &:hover {
      transform: translateY(-5px);
    }

    .testimonial-image {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto $space-sm;
    }

    .testimonial-placeholder {
      font-size: 80px;
      color: $text-secondary;
      margin-bottom: $space-sm;
    }

    blockquote {
      margin: 0 0 $space-sm;
      font-style: italic;
      color: $text-primary;

      p {
        margin: 0;
      }
    }

    .testimonial-meta {
      .customer-name {
        font-weight: bold;
        color: $text-primary;
        margin-bottom: $space-xs;
      }

      .rating {
        color: #f1c40f;
        font-size: 1rem;

        .fa-star,
        .far.fa-star {
          margin: 0 2px;
        }
      }
    }
  }
}

```

# assets/scss/sections/_why-choose-us.scss

```scss
@import '../abstracts/variables';

.why-choose-us {
    padding: $space-md $space-sm;

    .container {
        max-width: $container-width;
        margin: 0 auto;
        text-align: center;
    }

    h2 {
        font-size: $font-size-xl;
        margin-bottom: $space-md;
        color: $text-primary;

        @media (max-width: 768px) {
            font-size: 1.8em;
        }
    }

    .benefits-list {
        list-style: none;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: $gap-lg;

        @media (max-width: 768px) {
            grid-template-columns: 1fr;
        }
    }

    .benefit-item {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 260px;
        min-height: 220px;
        padding: 32px 20px;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08), 0 1.5px 6px rgba(0,0,0,0.04);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
        color: $text-primary;
        text-align: center;
        transition: box-shadow 0.2s, transform 0.2s;
        z-index: 1;

        &:hover {
            box-shadow: 0 8px 32px rgba(0,0,0,0.14), 0 3px 12px rgba(0,0,0,0.08);
            transform: translateY(-4px) scale(1.03);
        }

        &::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.32); // dark overlay for readability
            z-index: 1;
        }

        > span {
            position: relative;
            z-index: 2;
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0,0,0,0.18);
            width: 100%;
            display: block;
        }
    }

    .benefit-icon {
        display: none;
    }
}

@media (min-width: 1024px) {
  .why-choose-us .benefit-icon {
    width: 80px;
    height: 80px;
    max-width: none;
    max-height: none;
    display: block;
    margin-bottom: 16px;
  }
  .why-choose-us .benefit-item {
    font-size: 1.35rem;
    padding: 24px 12px;
  }
  .why-choose-us .benefit-item > span {
    font-size: 1.35rem;
    line-height: 1.5;
    font-weight: 500;
    padding: 0 8px;
  }
}
```

# assets/scss/style.scss

```scss
@use 'base/reset';
@use 'abstracts/variables';
@use 'abstracts/mixins';
@use 'layouts/header';
@use 'sections/hero';
@use 'sections/why-choose-us';
@use 'sections/companies-trust';
@use 'sections/services';
@use 'sections/testimonials';
@use 'sections/local-partner';
@use 'sections/final-cta';
@use 'layouts/footer';

```

# footer.php

```php
<?php
/**
 * Footer template for ECS theme
 *
 * @package ECS
 */
?>

<footer class="site-footer">
    <div class="footer-container">
        <!-- Footer Widgets -->
        <div class="footer-widgets">
            <?php if (have_rows('footer_columns', 'option')) : ?>
                <div class="footer-columns">
                    <?php while (have_rows('footer_columns', 'option')) : the_row(); ?>
                        <div class="footer-column">
                            <?php if ($title = get_sub_field('column_title')) : ?>
                                <h3><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>
                            <?php if ($content = get_sub_field('column_content')) : ?>
                                <div class="column-content">
                                    <?php echo wp_kses_post(ecs_process_footer_content($content)); ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('show_social_links') && have_rows('social_links', 'option')) : ?>
                                <ul class="social-links">
                                    <?php while (have_rows('social_links', 'option')) : the_row(); ?>
                                        <?php 
                                        $icon = get_sub_field('social_icon');
                                        $url = get_sub_field('social_url');
                                        $name = get_sub_field('social_name');
                                        ?>
                                        <?php if ($url && $name) : ?>
                                            <li>
                                                <a href="<?php echo esc_url($url); ?>" 
                                                   title="<?php echo esc_attr($name); ?>" 
                                                   target="_blank" 
                                                   rel="noopener noreferrer">
                                                    <?php if ($icon) : ?>
                                                        <i class="<?php echo esc_attr($icon); ?>"></i>
                                                    <?php else : ?>
                                                        <?php echo esc_html($name); ?>
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p><?php esc_html_e('No footer content configured.', 'ecs'); ?></p>
            <?php endif; ?>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>
                © <?php echo esc_html(date('Y')); ?> 
                <?php echo esc_html(get_field('company_name', 'option') ?: 'Element Cleaning Systems'); ?>. 
                <?php esc_html_e('All rights reserved.', 'ecs'); ?>
            </p>
            <?php if ($privacy_link = get_field('privacy_policy_link', 'option')) : ?>
                <a href="<?php echo esc_url($privacy_link); ?>" class="privacy-link">
                    <?php esc_html_e('Privacy Policy', 'ecs'); ?>
                </a>
            <?php endif; ?>
            <?php if ($terms_link = get_field('terms_conditions_link', 'option')) : ?>
                <a href="<?php echo esc_url($terms_link); ?>" class="terms-link">
                    <?php esc_html_e('Terms & Conditions', 'ecs'); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
```

# front-page.php

```php
<?php get_header(); ?>
<main>
    <?php
    $hero_bg_image = get_field('hero_background_image');
    $bg_image_url = '';
    if ($hero_bg_image && is_array($hero_bg_image) && !empty($hero_bg_image)) {
        $bg_image_url = esc_url($hero_bg_image['url']);
    }
    ?>
    <section class="hero" style="background-image: linear-gradient(180deg, hsla(118, 40%, 47%, 0.40) 0%, hsla(0, 7%, 29%, 0.40) 100%), url('<?php echo esc_url($bg_image_url); ?>');">
        <div class="hero-content">
            <h1><?php echo esc_html(get_field('hero_title')); ?></h1>
            <p><?php echo esc_html(get_field('hero_subtitle')); ?></p>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="cta">
                <?php echo esc_html(get_field('cta_text')); ?>
            </a>
        </div>
    </section>
    <!-- Companies That Trust Us & Why Choose Us combined section -->
    <div style="padding-top: 40px; display: flex; flex-direction: column; justify-content: center;">
    <!-- Companies That Trust Us Section -->
    <section class="companies-trust-us" data-aos="fade-up">
        <div class="container">
            <h2>Companies That Trust Us</h2>
            <?php if (have_rows('companies_that_trust_us')): ?>
                <div class="companies-grid" data-aos="fade-up">
                    <?php while (have_rows('companies_that_trust_us')): the_row(); ?>
                        <?php if ($logo = get_sub_field('company_logo')): ?>
                            <div class="company-logo">
                                <img src="<?php echo esc_url($logo['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr(get_sub_field('company_name') ?: 'Company Logo'); ?>" title="<?php echo esc_attr(get_sub_field('company_name')); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>No companies added yet.</p>
            <?php endif; ?>
        </div>
    </section>
    <!-- Why Choose Us Section -->
    <section class="why-choose-us" data-aos="fade-up">
        <div class="container">
            <?php if ($title = get_field('why_choose_us_title')) : ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php else : ?>
                <h2>Why Seattle Businesses Choose Us for Janitorial Services</h2>
            <?php endif; ?>
            <?php if (have_rows('why_choose_us_benefits')) : ?>
                <ul class="benefits-list">
                    <?php while (have_rows('why_choose_us_benefits')) : the_row(); ?>
                        <?php
                        $icon = get_sub_field('benefit_icon');
                        $icon_url = $icon ? esc_url($icon['sizes']['large'] ?? $icon['url']) : '';
                        ?>
                        <li class="benefit-item" style="background-image: url('<?php echo $icon_url; ?>');">
                            <span><?php echo esc_html(get_sub_field('benefit_text')); ?></span>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No benefits added yet.</p>
            <?php endif; ?>
        </div>
    </section>
    </div>
    <section class="services" data-aos="fade-up">
        <h2>Our Services</h2>
        <?php if (have_rows('services')) : ?>
            <div class="service-list">
                <?php while (have_rows('services')) : the_row(); ?>
                    <div class="service">
                        <?php
                        $service_image = get_sub_field('service_image');
                        $image_url = $service_image ? esc_url($service_image['url']) : '';
                        $image_alt = $service_image ? esc_attr($service_image['alt']) : esc_attr(get_sub_field('service_title'));
                        ?>
                        <?php if ($image_url) : ?>
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="service-image">
                        <?php endif; ?>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_sub_field('service_title')); ?></h3>
                            <p><?php echo esc_html(get_sub_field('service_description')); ?></p>
                            <?php if ($link = get_sub_field('service_link')) : ?>
                                <a href="<?php echo esc_url($link); ?>" class="service-link">Learn More</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>No services found.</p>
        <?php endif; ?>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" data-aos="fade-up">
        <div class="container">
            <h2>Testimonials</h2>
            <?php if (have_rows('testimonials')): ?>
                <div class="testimonials-grid">
                    <?php while (have_rows('testimonials')): the_row(); ?>
                        <div class="testimonial-card">
                            <?php if ($image = get_sub_field('customer_image')): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="testimonial-image">
                            <?php else: ?>
                                <i class="fas fa-user-circle testimonial-placeholder"></i>
                            <?php endif; ?>
                            <blockquote>
                                <p><?php echo esc_html(get_sub_field('testimonial_text')); ?></p>
                            </blockquote>
                            <div class="testimonial-meta">
                                <p class="customer-name"><?php echo esc_html(get_sub_field('customer_name')); ?></p>
                                <?php if ($rating = get_sub_field('rating')): ?>
                                    <div class="rating">
                                        <?php
                                        // Since return format is "Both (Array)", $rating is an array
                                        // Access the 'value' key (e.g., "4 stars")
                                        $rating_value = is_array($rating) ? $rating['value'] : $rating;
                                        // Extract the number from the value (e.g., "4 stars" -> 4)
                                        $stars = intval(str_replace(' stars', '', $rating_value));
                                        // Loop to display stars (1 to 5)
                                        for ($i = 1; $i <= 5; $i++):
                                            if ($i <= $stars): ?>
                                                <i class="fas fa-star"></i>
                                            <?php else: ?>
                                                <i class="far fa-star"></i>
                                        <?php endif;
                                        endfor; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>No testimonials available.</p>
            <?php endif; ?>
        </div>
    </section>
    <!-- Local Partner Section -->
    <?php
    $local_partner_bg = get_field('local_partner_bg_image');
    $local_bg_url = '';
    if ($local_partner_bg && is_array($local_partner_bg) && !empty($local_partner_bg)) {
        $local_bg_url = esc_url($local_partner_bg['url']);
    }
    ?>
    <section class="local-partner" data-aos="fade-up" style="background-image: url('<?php echo $local_bg_url; ?>');">
        <div class="container">
            <?php if ($title = get_field('local_partner_title')) : ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php else : ?>
                <h2>Your Local Partner for Exceptional Janitorial Services</h2>
            <?php endif; ?>
            <?php if ($content = get_field('local_partner_content')) : ?>
                <div class="local-partner-content">
                    <?php echo wp_kses_post($content); ?>
                </div>
            <?php else : ?>
                <div class="local-partner-content">
                    <p>When you choose carpet cleaning from BCS, you get a deeper professional cleaning, faster-drying carpet and a healthier home and office. Does anyone in your home or office suffer from asthma or allergies and you are concerned about air quality and allergens? Do your children love to roll around and play on the carpet and you're worried about bacteria and microorganisms?</p>
                </div>
            <?php endif; ?>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="consultation-btn">
                Schedule a Consultation
            </a>
        </div>
    </section>
    
    <!-- Final CTA Section -->
    <section class="final-cta" data-aos="fade-up">
    <div class="container">
        <div class="cta-grid">
            <div class="cta-content">
                <?php if ($headline = get_field('final_cta_headline')) : ?>
                    <h2><?php echo esc_html($headline); ?></h2>
                <?php else : ?>
                    <h2>Ready for a Spotless Seattle Workspace?</h2>
                <?php endif; ?>
                
                <?php if ($supporting_text = get_field('final_cta_supporting_text')) : ?>
                    <div class="supporting-text"><?php echo esc_html($supporting_text); ?></div>
                <?php else : ?>
                    <div class="supporting-text">Experience the Element difference with our professional cleaning services. Let us help you maintain a clean, healthy environment for your business.</div>
                <?php endif; ?>
                
                <?php 
                $cta_text = get_field('final_cta_button_text') ?: 'Get Your Free Quote Today';
                $cta_link = get_field('final_cta_button_link') ?: get_permalink(get_page_by_path('contact'));
                ?>
                <a href="<?php echo esc_url($cta_link); ?>" class="cta-button">
                    <?php echo esc_html($cta_text); ?>
                </a>
                
                <div class="contact-info">
                    <?php if ($phone = get_field('company_phone', 'option')) : ?>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone)); ?>">
                                <?php echo esc_html($phone); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($email = get_field('company_email', 'option')) : ?>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo esc_attr($email); ?>">
                                <?php echo esc_html($email); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="cta-form">
                <h3>Request a Quote</h3>
                <?php
                $form_shortcode = get_field('final_cta_form_shortcode');
                if ($form_shortcode) {
                    echo do_shortcode($form_shortcode);
                } else {
                    echo do_shortcode('[contact-form-7 id="bd244cb" title="Request a Quote Form"]');
                }
                ?>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
```

# functions.php

```php
<?php

function ecs_theme_setup()
{
    add_theme_support('title-tag'); // SEO title tag
    add_theme_support('post-thumbnails'); // featured images
    add_theme_support('custom-logo'); // logo in customizer

    // register main navigation menu
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'ecs_theme_setup');

// Register Footer Widget Areas
function ecs_widgets_init() {
    register_sidebar([
        'name'          => 'Footer Column 1',
        'id'            => 'footer_column_1',
        'description'   => 'Add widgets for the first footer column',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => 'Footer Column 2',
        'id'            => 'footer_column_2',
        'description'   => 'Add widgets for the second footer column',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => 'Footer Column 3',
        'id'            => 'footer_column_3',
        'description'   => 'Add widgets for the third footer column',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'ecs_widgets_init');

function ecs_theme_scripts()
{
    // Enqueue Google Fonts
    wp_enqueue_style('ecs-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', array(), null, 'all');

    // Enqueue Font Awesome
    wp_enqueue_style('ecs-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');

    // Enqueue compiled styles
    wp_enqueue_style('ecs-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get('Version'), 'all');

    // Enqueue main JS (already existing)
    wp_enqueue_script('ecs-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);

    // Enqueue minified parallax JS
    wp_enqueue_script(
        'ecs-parallax',
        get_template_directory_uri() . '/assets/js/dist/parallax.js',
        array(), // no deps
        filemtime(get_template_directory() . '/assets/js/dist/parallax.js'),
        true // load in footer
    );
    // Enqueue AOS (Animate On Scroll) library
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1');
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
    wp_add_inline_script('aos', 'AOS.init();');
}

add_action('wp_enqueue_scripts', 'ecs_theme_scripts');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);
}

function ecs_load_theme_textdomain() {
    load_theme_textdomain('ecs', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'ecs_load_theme_textdomain');

/**
 * Procesar el contenido del WYSIWYG para agregar íconos y links a teléfono y email.
 *
 * @param string $content El contenido del WYSIWYG.
 * @return string Contenido procesado.
 */
function ecs_process_footer_content($content) {
    // Reemplazar [phone]...[/phone] con un link tel: y un ícono
    $content = preg_replace(
        '/\[phone\](.*?)\[\/phone\]/',
        '<div class="contact-phone"><a href="tel:$1"><i class="fas fa-phone"></i> $1</a></div>',
        $content
    );

    // Reemplazar [email]...[/email] con un link mailto: y un ícono
    $content = preg_replace(
        '/\[email\](.*?)\[\/email\]/',
        '<div class="contact-email"><a href="mailto:$1"><i class="fas fa-envelope"></i> $1</a></div>',
        $content
    );

    return $content;
}
```

# gulpfile.js

```js
const { src, dest, series, parallel, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const browserSync = require('browser-sync').create();

function sassTask() {
  return src('assets/scss/**/*.scss', { sourcemaps: true })
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(dest('assets/css', { sourcemaps: '.' }))
    .pipe(browserSync.stream());
}

function jsTask() {
  return src('assets/js/src/*.js', { sourcemaps: true })
    .pipe(uglify())
    .pipe(dest('assets/js/dist', { sourcemaps: '.' }))
    .pipe(browserSync.stream());
}

function imagesTask() {
  return src('assets/images/**/*')
    .pipe(imagemin())
    .pipe(dest('assets/images/optimized'));
}

function watchTask() {
  browserSync.init({
    proxy: 'http://element-cleaning-systems.local/',
    notify: false,
  });
  watch('assets/scss/**/*.scss', sassTask);
  watch('assets/js/src/*.js', jsTask); // Watch only the src directory
  watch('**/*.php', browserSync.reload);
}

exports.sass = sassTask;
exports.js = jsTask;
exports.images = imagesTask;
exports.watch = watchTask;
exports.default = series(parallel(sassTask, jsTask, imagesTask), watchTask);

```

# header.php

```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <!-- Request a Quote Bar -->
        <div class="request-quote-bar">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('request-a-quote'))); ?>" class="request-quote-link">
                <?php echo esc_html(get_field('request_quote_text', 'option') ?: 'Request a Quote'); ?> <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Hamburger Menu Toggle -->
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <!-- Navigation -->
            <nav class="primary-nav">
                <ul class="nav-menu">
                    <?php
                    $menu_items = wp_get_nav_menu_items('Primary Menu');
                    // echo '<pre>';
                    // var_dump($menu_items);
                    // echo '</pre>';
                    if ($menu_items) :
                        foreach ($menu_items as $menu_item) :
                            $is_services = (strtolower($menu_item->title) === 'services');
                    ?>
                            <li class="menu-item <?php echo $is_services ? 'has-mega-menu' : ''; ?>">
                                <?php if ($is_services) : ?>
                                    <label for="services-toggle-<?php echo $menu_item->ID; ?>" class="services-link-label">
                                        <?php echo esc_html($menu_item->title); ?>
                                        <i class="fas fa-chevron-down services-icon"></i>
                                    </label>
                                <?php else : ?>
                                    <a href="<?php echo esc_url($menu_item->url); ?>">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($is_services) : ?>
                                    <input type="checkbox" id="services-toggle-<?php echo $menu_item->ID; ?>" class="mega-menu-toggle">
                                    <label for="services-toggle-<?php echo $menu_item->ID; ?>" class="mega-menu-toggle-label">
                                        <span class="toggle-icon"></span>
                                    </label>
                                    <div class="mega-menu">
                                        <?php if (have_rows('services', get_option('page_on_front'))) : ?>
                                            <?php while (have_rows('services', get_option('page_on_front'))) : the_row(); ?>
                                                <?php
                                                $service_title = get_sub_field('service_title');
                                                $service_link = get_sub_field('service_link');
                                                if ($service_title && $service_link) :
                                                ?>
                                                    <a href="<?php echo esc_url($service_link); ?>">
                                                        <?php echo esc_html($service_title); ?>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- Phone Number -->
            <div class="contact-info">
                <a href="tel:<?php echo esc_attr(get_field('phone_number', 'option')); ?>" class="phone-number">
                    <i class="fas fa-phone"></i>
                    <?php echo esc_html(get_field('phone_number', 'option')); ?>
                </a>
                <?php if ($note = get_field('language_note', 'option')) : ?>
                    <span class="language-note">(<?php echo esc_html($note); ?>)</span>
                <?php endif; ?>
            </div>
        </div>
    </header>
```

# index.php

```php
<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>
```

# package.json

```json
{
  "name": "ecs",
  "version": "1.0.0",
  "main": "index.js",
  "scripts": {
    "gulp": "gulp"
  },
  "keywords": [],
  "author": "",
  "license": "ISC",
  "description": "",
  "devDependencies": {
      "gulp": "^4.0.2",
      "gulp-sass": "^5.1.0",
      "sass": "^1.77.6",
      "gulp-clean-css": "^4.3.0",
      "gulp-uglify": "^3.0.2",
      "gulp-imagemin": "^7.1.0",
      "browser-sync": "^2.29.3"
    }
}

```

# style.css

```css
/*
Theme Name: ECS (Element Cleaning Systems)
Author: Kevin Barreto
Description: ECS (Element Cleaning Systems) is a WordPress theme designed for cleaning services.
Version: 1.0
*/
```

