// Displaying and Hiding Modal
window.addEventListener("modalClosedDelete", (event) => {
    console.log("modalClosedDelete");
    $("#customModal").modal("hide");
});

window.addEventListener("modalOpenedDelete", (event) => {
    console.log("modalOpenedDelete");
    $("#customModal").modal("show");
});
// Displaying and Hiding Modal
