/*
Copyright 2020 Adobe
All Rights Reserved.

NOTICE: Adobe permits you to use, modify, and distribute this file in
accordance with the terms of the Adobe license agreement accompanying
it. If you have received this file from a source other than Adobe,
then your use, modification, or distribution of it requires the prior
written permission of Adobe.
*/

/* Pass the embed mode option here */
const viewerConfig = {
    embedMode: "SIZED_CONTAINER"
};


/* Wait for Adobe Document Services PDF Embed API to be ready and enable the View PDF button */
document.addEventListener("adobe_dc_view_sdk.ready", function () {
    document.getElementById("view-pdf-btn").disabled = false;

    var elms = document.querySelectorAll("[id='view-pdf-btn']");
    for(var i = 0; i < elms.length; i++) {
    elms[i].disabled = false;}
});
//var qawe = '';
function uerp(vadrt) {
    // body...
    
    var qawe = vadrt;
    grenv = "http://localhost/OEFSS/files/" + qawe;
    alert(grenv);
    previewFile();
}
/* Function to render the file using PDF Embed API. */
function previewFile(){
    
    /* Initialize the AdobeDC View object */
    var adobeDCView = new AdobeDC.View({
        /* Pass your registered client id */
        clientId: "e5db721e12134516b3d751ca8a7f560e"
    });

    /* Invoke the file preview API on Adobe DC View object */
    adobeDCView.previewFile({
        /* Pass information on how to access the file */
        content: {
            /* Location of file where it is hosted */
            location: {
                url: grenv,
                //url: "http://localhost/OEFSS/files/11141311_AST2652_0.439155092592593.pdf",

            },
        },
        /* Pass meta data of file */
        metaData: {
            /* file name */
            fileName: tey
        }
    }, viewerConfig);
};
