# Inline example of JSmol 3D structure
<script type="text/javascript" src="src/JSmol.min.js"></script>
<script type="text/javascript">
 Info = {
      script:
          "set antialiasDisplay true;load cholesterol-3D.sdf;cartoon on;color cartoon structure;rotate z 118.48; rotate y 117.66; rotate z -47.64;;",
      width:350,      
      height:200,      
      j2sPath: "src/j2s",
      disableJ2SLoadMonitor: false,
      isableInitialConsole: true
 };
</script>

<script>
      Jmol.getApplet("JmolAppletA", Info);
</script>