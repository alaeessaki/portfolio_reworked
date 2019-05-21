
sal();
var links = document.querySelectorAll(".cat");
var active_link;
var categories = ["all","website","mobileapp","webapp","others","game"];
links.forEach(element => {
    element.addEventListener("click", () => {
        element.classList.add("active");
        active_link = element;
        target = element.getAttribute("data-target");
        categories.forEach(element2=>{
            if(element2 != target){
                project = document.getElementById(element2);
                project.classList.add("non-active");
            }
            else{
                project = document.getElementById(element2);
                project.classList.remove("non-active");
                sal();
               
            }
        })
        links.forEach(element => {
            if (element != active_link) {
                element.classList.remove("active");
            }
        })
    });
});

function getprj(name,image,desc,tech,github){
    var mtitle = document.getElementById("mtitle")
    var mimg = document.getElementById("mimg")
    var mdesc = document.getElementById("mdesc")
    var mtech = document.getElementById("mtech")
    var mlink = document.getElementById("mlink")

    mtitle.innerHTML = name;
    mimg.src = "../../assets/projects-imgs/" +image;
    mdesc.innerHTML = desc;
    mtech.innerHTML = tech
    mlink.href = github;

    if (github == "#") {
        mlink.setAttribute("data-toggle", "modal");
        mlink.setAttribute("data-target", "#testModal");
    }
}

