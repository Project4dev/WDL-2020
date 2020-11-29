<?php include('head.php'); ?>
<body>


<script language="JavaScript" type="text/javascript">
    function loadXMLDOC(dname)
    {
        if(window.XMLHttpRequest)
        {
            xhttp=new XMLHttpRequest();
        }
        else
        {
            xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.open("GET",dname,false);
        xhttp.send();
        return xhttp.responseXML;
    }

    function loadMarksheetXML(sname,mname,sno){
        xmlDoc=loadXMLDOC(mname);
        x=xmlDoc.getElementsByTagName("course");

        var divText="<table class='table table-dark'><tr>"+
        "<th colspan=9>Name : "+sname+"</th></tr>"+
        "<tr><th colspan=9>Exam :  SE (Sem IV) CBCGS</th></tr>"+
        "<tr><th colspan=9>Branch :  Computer Engg</th></tr>"+
        "<tr><th colspan=9>HELD in :  May 2020(REGULAR)</th></tr>"+
        "<tr><th colspan=9>Seat no :  COCB30"+sno+"</th></tr>"+
        "<tr></tr><tr><th>Course ID</th><th>Course Title</th>"+
        "<th>Course Credits</th><th>ESE / OR / PR</th>"+
        "<th>TW</th><th>Overall Earned</th>"+
        "<th>CXGP</th></tr>";

        for(i=0;i<x.length-2;i++){

            courseid=xmlDoc.getElementsByTagName("courseid")[i].childNodes[0].nodeValue;
            title=xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue;
            CRD=xmlDoc.getElementsByTagName("CRD")[i].childNodes[0].nodeValue;
            EDORPR=xmlDoc.getElementsByTagName("EDORPR")[i].childNodes[0].nodeValue;
            TW=xmlDoc.getElementsByTagName("TW")[i].childNodes[0].nodeValue;
            OE=xmlDoc.getElementsByTagName("OE")[i].childNodes[0].nodeValue;
            total=xmlDoc.getElementsByTagName("total")[i].childNodes[0].nodeValue;

            divText+="<tr><td>"+courseid+"</td><td>"+title+"</td><td>"+CRD+"</td><td>"+
                    EDORPR+"</td><td>"+TW+"</td><td>"+OE+"</td><td>"+total+"</td></tr>";
        }
        
            courseid=xmlDoc.getElementsByTagName("courseid")[i].childNodes[0].nodeValue;
            title=xmlDoc.getElementsByTagName("title")[i].childNodes[0].nodeValue;
            CRD=xmlDoc.getElementsByTagName("CRD")[i].childNodes[0].nodeValue;
            EDORPR=xmlDoc.getElementsByTagName("EDORPR")[i].childNodes[0].nodeValue;
            TW=xmlDoc.getElementsByTagName("TW")[i].childNodes[0].nodeValue;
            OE=xmlDoc.getElementsByTagName("OE")[i].childNodes[0].nodeValue;
            total=xmlDoc.getElementsByTagName("total")[i].childNodes[0].nodeValue;

            divText+="<tr><td>"+courseid+"</td><td>"+title+"</td><td>"+CRD+"</td><td>"+
                    EDORPR+"</td><td>"+TW+"</td><td>"+OE+"</td><td>"+total+"</td></tr>";
            
            courseid=xmlDoc.getElementsByTagName("courseid")[i+1].childNodes[0].nodeValue;
            title=xmlDoc.getElementsByTagName("title")[i+1].childNodes[0].nodeValue;
            CRD=xmlDoc.getElementsByTagName("CRD")[i+1].childNodes[0].nodeValue;
            EDORPR=xmlDoc.getElementsByTagName("EDORPR")[i+1].childNodes[0].nodeValue;
            TW=xmlDoc.getElementsByTagName("TW")[i+1].childNodes[0].nodeValue;
            OE=xmlDoc.getElementsByTagName("OE")[i+1].childNodes[0].nodeValue;
            total=xmlDoc.getElementsByTagName("total")[i+1].childNodes[0].nodeValue;
            
            divText+="<tr><td colspan=2>"+courseid+"</td><td colspan=2>"+title+
            "</td><td colspan=2>"+CRD+"</td><td>"+EDORPR+"</td>";

        divText+="</table>";
        document.getElementById("marksheet").innerHTML=divText;
        document.getElementById("watermark").style.display = "block";
    }    
    </script>
<main class="page contact-us-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <center><h2 class="text-info mt-5">SE Marksheet</h2></center>

            </div>

            <div class="container mt-5">
                <p align="center">
                    <input type="submit" class="btn btn-success" value="Shahid Result" onclick="loadMarksheetXML('Shahidraja shaikh','shahid-marksheet.xml','56')" />
                    <input type="submit" class="btn btn-success"  value="Amaan Result" onclick="loadMarksheetXML('Amaan shaikh','amaan-marksheet.xml','49')" />
                    <input type="submit" class="btn btn-success" value="Rahim Result" onclick="loadMarksheetXML('Abdul rahim','rahim-marksheet.xml','15')" />
                    <input type="submit" class="btn btn-success" value="Asraf Result" onclick="loadMarksheetXML('Asraf Khan','asraf-marksheet.xml','29')" />
                </p>
                <div id="marksheet" class="block-content">
                </div>
            </div>

        </div>
    </section>
</main>

</body>
</html>