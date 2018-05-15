
    if (typeof(OA_zones) != 'undefined') {
        var OA_zoneids = '';
        for (var zonename in OA_zones) OA_zoneids += escape(zonename+'=' + OA_zones[zonename] + "|");
        OA_zoneids += '&amp;nz=1';
    } else {
        var OA_zoneids = escape('73|82|83|84|85|86|87|88|89|90|91|92|93|94|95|96|97|98|99|107|108|109|110|111|112|114|115|116|117|118|119|120|121|123|125|126|128|129|132|134|136|137|138|139|140|141|142|143|144|146|147|148|149|150|151|152|153|154|155|156|157|158|159|160|161|162|163|164|166|167|168|169|170|171|172|173|174|175|176|177|178|179|180|181|182|183|184|185|186|187|188|189|190|191|192|193|194|195|196|223');
    }

    if (typeof(OA_source) == 'undefined') { OA_source = ''; }
    var OA_p=location.protocol=='https:'?'https://ads.spitogatos.gr/www/delivery/spc.php':'http://ads.spitogatos.gr/www/delivery/spc.php';
    var OA_r=Math.floor(Math.random()*99999999);
    OA_output = new Array();

    var OA_spc="<"+"script type='text/javascript' ";
    OA_spc+="src='"+OA_p+"?zones="+OA_zoneids;
    OA_spc+="&amp;source="+escape(OA_source)+"&amp;r="+OA_r;
    OA_spc+="&amp;humor=true&amp;userhandle=notsignedin&amp;block=1&amp;target=_blank&amp;charset=UTF-8&amp;resolution=desktop";
    
    if (window.location) OA_spc+="&amp;loc="+escape(window.location);
    if (document.referrer) OA_spc+="&amp;referer="+escape(document.referrer);
    OA_spc+="'><"+"/script>";
    document.write(OA_spc);

    function OA_show(name) {
        if (typeof(OA_output[name]) == 'undefined') {
            return;
        } else {
            document.write(OA_output[name]);
        }
    }

    function OA_showpop(name) {
        zones = window.OA_zones ? window.OA_zones : false;
        var zoneid = name;
        if (typeof(window.OA_zones) != 'undefined') {
            if (typeof(zones[name]) == 'undefined') {
                return;
            }
            zoneid = zones[name];
        }

        OA_p=location.protocol=='https:'?'https://ads.spitogatos.gr/www/delivery/apu.php':'http://ads.spitogatos.gr/www/delivery/apu.php';

        var OA_pop="<"+"script type='text/javascript' ";
        OA_pop+="src='"+OA_p+"?zoneid="+zoneid;
        OA_pop+="&amp;source="+escape(OA_source)+"&amp;r="+OA_r;
        OA_spc+="&amp;humor=true&amp;userhandle=notsignedin&amp;block=1&amp;target=_blank&amp;charset=UTF-8&amp;resolution=desktop";
        if (window.location) OA_pop+="&amp;loc="+escape(window.location);
        if (document.referrer) OA_pop+="&amp;referer="+escape(document.referrer);
        OA_pop+="'><"+"/script>";

        document.write(OA_pop);
    }
var OA_fo = '';
OA_fo += "<"+"script type=\'text/javascript\' src=\'https://ads.spitogatos.gr/www/delivery/fl.js\'><"+"/script>\n";
document.write(OA_fo);
