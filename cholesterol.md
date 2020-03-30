# Inline example of JSmol 3D structure
<script type="text/javascript" src="src/JSmol.min.js"></script>
<script type="text/javascript">
 Info = {
      script:
          "set antialiasDisplay true;load cholesterol-3D.sdf;cartoon on;color cartoon structure;;",
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