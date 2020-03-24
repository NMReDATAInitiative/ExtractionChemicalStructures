# Inline example of JSmol 3D structure
<script type="text/javascript" src="src/JSmol.min.js"></script>
<script type="text/javascript" src="src/Jmol2.js"></script>
<script type="text/javascript">
Jmol.Info = {
      jarPath: "src",
      jarFile: "JmolApplet0.jar",
      j2sPath: "src/j2s",
      use: "HTML5", 
			disableJ2SLoadMonitor: false,
			disableInitialConsole: true
}
document.getElementById("info").reset()
function sync() {
 var syncing = document.getElementById("drive").checked
 var s = (syncing ? "sync * on;sync * \"set syncMouse TRUE\"": "sync * off")
 jmolScript(s, "A");
}
</script>
<script>jmolApplet(350,"load cholesterol-3D.sdf;cartoon on;color cartoon structure;;rotate z 118.48; rotate y 117.66; rotate z -47.64;;", "A");</script>