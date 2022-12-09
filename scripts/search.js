function printKey(element) {
     
    element.addEventListener("keydown", function(event)
    {
        if (event.key === "Enter") {
            console.log("Hello");
        }
    });
}