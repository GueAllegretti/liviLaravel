/* NAVBAR */  
let navbar = document.querySelector(".cg-navbar")
document.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.remove("cg-navbar-scroll")
    } else{
        navbar.classList.add("cg-navbar-scroll")
    }
})

/* LAVORI */
fetch("./annunci.json")
.then((response) => response.json())
.then((annunci) => {
    let categorie = []
    annunci.forEach(annuncio => {
        if (!categorie.includes(annuncio.category)){
            categorie.push(annuncio.category)
        }
    });

    let firstWrapperCategories = document.querySelector("#firstWrapperCategories")
    let firstCategories = [
        categorie[0],
        categorie[1]
    ]
    firstCategories.forEach((category) => {
        let categoryElement = createCategoryElement(category)
        firstWrapperCategories.appendChild(categoryElement)
    })
    
    let secondWrapperCategories = document.querySelector("#secondWrapperCategories")
    let secondCategories = [
        categorie[2],
        categorie[3]
    ]
    secondCategories.forEach((category) => {
        let categoryElement = createCategoryElement(category)
        secondWrapperCategories.appendChild(categoryElement)
    })
    
    let thirdWrapperCategories = document.querySelector("#thirdWrapperCategories")
    let thirdCategories = [
        categorie[4],
        categorie[5]
    ]
    thirdCategories.forEach((category) => {
        let categoryElement = createCategoryElement(category)
        thirdWrapperCategories.appendChild(categoryElement)
    })
    
    let slidesWrapper = document.querySelector(".glide .glide__slides")
    let important = annunci
    important.forEach((annuncio) => {
        let annuncioSlideElement = createAnnuncioElement(annuncio)
        slidesWrapper.appendChild(annuncioSlideElement)
    })
    
    let glide = new Glide(".glide", {
        type: "carousel",
        perView: 3,
        autoplay: 1000,
        breakpoints: {
            "992": {
                perView: 2
            },
            "576": {
                perView: 1
            }
        }
    }).mount()
})

function createCategoryElement(category) {
    let categoryElement = document.createElement("div")
    categoryElement.classList.add("service-item")
    categoryElement.innerHTML = `
    <div>
    <a class="link-footer" href="/servizi">${category}</a
    </div>
    `
    return categoryElement
}

function createAnnuncioElement(annuncio) {
    let categoryElement = document.createElement("li")
    categoryElement.classList.add("glide__slide")
    categoryElement.innerHTML = `
    <div class="portfolio-inner">
        <img src="${annuncio.img}" class="card-img-top w-100" height="250" style="object-fit: cover;" alt="${annuncio.alt}">
        <h6 class="card-title mb-2 mt-2 fw-light">${annuncio.category}</h6>
            <p class="card-text fw-lighter">${annuncio.where}</p>
            <div class="portfolio-text text-start bg-white p-4">
                <div>
                    <h6>Interventi effettuati:</h6>
                    <p class="lh-sm fw-lighter"><i class="fa-solid fa-caret-right me-2"></i>
                    ${annuncio.description}
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-square secondary-icone-social rounded-circle mx-1" href="/work"><i class="fa fa-eye"></i></a>
                </div>
            </div>
    </div>  
    `
    return categoryElement
}