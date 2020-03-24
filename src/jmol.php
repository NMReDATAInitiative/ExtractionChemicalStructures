<!DOCTYPE html><html style='height:100%'><head><title></title></head><body style='height:100%'>
<b>https://chemapps.stolaf.edu/jmol/jmol.php version 1.1.10 10/10/2019
<br><br>Easy Jmol insertion into a web page</b>
<br><br><div style='width:600px'>This site allows insertion of a Jmol applet into a web page with nothing more than a simple &lt;script> or &lt;a> tag. No model files are necessary -- the 3D model is obtained from the <a href='http://www.rcsb.org'>RCSB</a> using a PDB id or from the <a href='https://cactus.nci.nih.gov'>NIH CACTVS server</a> based on a chemical identifier such as a name, <a href=http://en.wikipedia.org/wiki/Simplified_molecular_input_line_entry_specification>SMILES</a> string, <a href=http://www.iupac.org/inchi/>InChI</a> key, or CAS registry number.
<br><br>Bob Hanson, St. Olaf College, <a href=mailto:hansonr@stolaf.edu>hansonr@stolaf.edu</a></div>
<pre>
 direct call for use in href tags or via AJAX:
    <b>https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone</b>
    <b>https://chemapps.stolaf.edu/jmol/jmol.php?model=caffeine&image2d</b>
 anchor format (creates link to opens new tab/page or replaces current page):
    <b>&lt;a target=_blank href="https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone">3D model&lt;/a></b>
    <b>&lt;a href="https://chemapps.stolaf.edu/jmol/jmol.php?model=caffeine&image2d">2D drawing&lt;/a></b>
 popup format (creates link to pop up a new window of a specified size):
    <b>&lt;script type="text/javascript" src="https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone&link=3D model">&lt;/script></b>
 inline format (displays applet on current page):
    <b>&lt;script type="text/javascript" src="https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone&inline">&lt;/script></b>
    <b>&lt;script type="text/javascript" src="https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone&image2d&inline">&lt;/script></b>
    <b>&lt;script type="text/javascript" src="https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone&image2d&inline">&lt;/script></b>
 options:
             &source=...      (option 1) file source of model, starting with http://
             &model=...       (option 2) compound name or SMILES string for NIH CACTVS server <a href='https://cactus.nci.nih.gov/chemical/structure/aspirin/file?format=sdf&get3d=True'>test</a>
             &pdbid=xxxx      (option 3) PDB ID for model from RCSB <a href=https://files.rcsb.org/download/1crn.cif>test</a>
             &pdbid=xxx       (option 4) PDB ID for ligand from RCSB <a href=https://files.rcsb.org/ligands/download/TA1.cif>test</a>
             &id=...          optional id for applet (necessary if multiple applets are on a page)
             &isfirst=true    set this false if this is not the first applet on the page; only for inline
             &inline          optional return JavaScript to create applet on current page
             &link=...        optional text for &lt;a href=...>xxxx</a> tag for a popup window
             &script=...      optional script (should be simple)
             &scriptvar=...   optional predefined script variable  (JavaScript variable name or function, not the script itself; &inline only)
             &width=...       optional width, e.g.: 300 or 100% (default 600)
             &height=...      optional height, e.g.: 300 or 100% (default 600)
             &caption=...     optional caption (only for anchor-type - not &inline and no &link)
             &title=...       optional title (not &inline)
             &image2d=true    option to produce an image, not a JSmol window

 anchor example: <a target=_blank href="https://chemapps.stolaf.edu/jmol/jmol.php?model=aspirin&caption=aspirin%20model&lt;script>jmolCheckbox('spin on','spin off','spin on/off')&lt;/script>">https://chemapps.stolaf.edu/jmol/jmol.php?model=aspirin&caption=aspirin model &lt;script>jmolCheckbox('spin on','spin off','spin on/off')&lt;/script></a>

 popup example: <script type='text/javascript' src='https://chemapps.stolaf.edu/jmol/jmol.php?model=acetone&link=3D model of acetone&caption=acetone&script=background white;rotate x 180'></script>

 inline example: 
</pre><table border=1 cellpadding=10><tr><td>caffeine<div style="width:450px;height:400px"><script src="https://chemapps.stolaf.edu/jmol/jmol.php?model=caffeine&inline=1&width=450&height=400"></script></div></td><td>tylenol<div style="width:450px;height:400px"><script src="https://chemapps.stolaf.edu/jmol/jmol.php?model=tylenol&inline=1&isfirst=false&width=450&height=400"></script></div></td><td>morphine (2D)<div style="width:250px;height:250px"><script src="https://chemapps.stolaf.edu/jmol/jmol.php?model=morphine&inline=1&image2d=true&width=250&height=250"></script></div></td></tr></table>