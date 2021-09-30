function luetiedot(){
    loadDoc();
}

function calculate() {
    let mac = document.getElementById("txtmac").value;
    let pc = document.getElementById("txtpc").value;
    let chrome = document.getElementById("txtchrome").value;
    let kulutus = Math.round(0.03*mac*6*100)/100 + Math.round(0.03*pc*6*100)/100 + Math.round(0.01*chrome*6*100)/100;
    document.getElementById("txtKulutus1").innerHTML = kulutus;

    let tuotanto1 = document.getElementById("txtTuotanto1").innerHTML;
    let aurinko1 = tuotanto1 / kulutus * 100;
    document.getElementById("txtAurinko1").innerHTML = Math.round(aurinko1) + "%";

   
    let verkko1 = 100 - aurinko1;
    document.getElementById("txtVerkko1").innerHTML = Math.round(verkko1) + "%";
}

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          // readyState 4: requests finished and response is ready
          // status 200: "OK"
          parseMenu(this);
      }
    };
    xhttp.open("GET", "paneelit.xml", true);
    xhttp.send();
  }
  
  function parseMenu(xml) {
    var i;
    var sum = 0;
    var sum2 = 0;
    var xmlDoc = xml.responseXML;
    var x = xmlDoc.getElementsByTagName("paneeli");
    for (i = 0; i <x.length; i++) {
        sum += parseFloat(x[i].getElementsByTagName("tuotanto_1")[0].childNodes[0
        ].nodeValue) ;
        sum2 += parseFloat(x[i].getElementsByTagName("tuotanto_2")[0].childNodes[0
        ].nodeValue) ;
    }
    

    document.getElementById("txtTuotanto1").innerHTML = sum;
    document.getElementById("txtTuotanto2").innerHTML = sum2;
  }