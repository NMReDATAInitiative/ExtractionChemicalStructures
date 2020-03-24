# Chemical structures in chemistry files
Important chemistry files including chemical structures

File extension|Origin|Extraction tool|Example|converted into .mol file(not active yet...)
----|----|---|---|---
.cdx .cdxml|ChemDraw|[OpenBabel](#openbabel)|[benzoic.cdx](benzoic.cdx) [structure.cdxml](structure.cdxml) |*benzoic acid in .mol format*
.log .out .g09|Gaussia98/03/09/16|[OpenBabel](#openbabel)|[melezitose_betternmrJ.log](melezitose_betternmrJ.log)|
.sdf|multiple open sources|[OpenBabel](#openbabel)|[compound1.nmredata.sdf](compound1.nmredata.sdf)|
.mol|multiple open sources|no conversion||
.mnova|MestreNova|[Mnova](#mnova)|[vaniline.mnova](Vaniline_attributed.mnova)|

Visualisation can be done after [conversion](#openbabel) into the open .mol files format. The .mol file can be displayed using a specialized tools (nice for <script type="text/javascript" src="https://chemapps.stolaf.edu/jmol/jmol.php?source=https://static.molinstincts.com/sdf_3d/cholesterol-3D-structure-CT1001897301.sdf&link=3D structures"></script>) or as a fixed image after [conversion](#openbabel) of .mol into .png (or other format).

## OpenBabel
Conversion into .mol file using [OpenBabel](https://open-babel.readthedocs.io/en/latest/)
```
obabel inputfile.sdf -O outputfile.mol
obabel inputfile.cdx -O outputfile.mol
obabel -ig03 inputfile.log -O outputfile.mol
```
Conversion into images using OpenBabel
```
obabel outputfile.mol -O outputfile.png
```
A separete web service returning the .mol or the .png when sending any other format would simplify interfacing and modularity.

## Mnova
The [Mnova](https://mestrelab.com/download/mnova/) software requires a [licence](https://www.unige.ch/sciences/chiorg/mnova/).
Extraction of elements from the .mnova files can be done using scripts called from unix:
```
/usr/bin/mnova "/usr/username/myScript.qs" -sf "myFunction",0.1,10,true,off // generic call of function from a for user-defined script
/usr/bin/mnova "NMReDATAExporter.qs" //for NMReDATA - this script my be a starting point for automated extraction. We may have to remove user interaction from this script.
babel -isdf  'mymols.cdx' -omol 'outputfile.mol' //if the data are not in .mol format already
```
A web service returning the .mol when sending a .mnova would simplify interfacing and modularity.
When running scripts, the graphical interface is disabled.
# Visualization of .mol files

Extension|Source|Visualization tool|Demo
----|----|---|---
.mol|2D structure|[JSme](https://www.peter-ertl.com/jsme/)|[2D structure of menthol](menthol) 
.mol|2D structure|[Kekule](https://partridgejiang.github.io/Kekule.js/)|[2D structure of menthol](https://gr-jeannerat-unige.github.io/macrolide-antibiotics/page15) 
.mol|3D structure|[JSmol](http://wiki.jmol.org/index.php/Jmol_JavaScript_Object#JSmol)|[3D structure of cholesterol](cholesterol.md)|

[Example based on React](https://zakodium.github.io/react-ocl)

# Note about chemical structures in chemistry
In chemistry representation of the structure of componds is essential. 
We shall distinguish often called "2d" or "flat" structure that are drawing where 3D features are represented using special notation from full-flesh 3D structures where the X, Y, Z coordinates are specified. 
## 2D structure
In most case, compounds are represented as a projection on the surface where they are drawn. The knowledge of the chemist makes it clear that the three bonds of the highligheted cabon are not on the same plane because a fourth bond with a hydrogen atom is implict. This is the reprentation of alanine. If the chemists wants to specify, which of the enantiomer he wants to represent, he uses a filled triangle or dashed triangle to indicate that the bonds is pointing up or down respectively. These represent L-alanine and D-alanine respectively.

![alt text](ala.png)

Converting a 2D structure into a 3D structure is not problematic when the stereochemistry is fully determined. If the type of alanine (D- or L-) is not fully determined (something that may reflect a genuine lack of information) it is better not to use 3D structures, or to generate all the possible structures and give the chemist the choice among them. It means that one should not systematically convert "2D" into "3d" structures - only do it when it is safe.

alanine|InChI|InChIKey
----|----|---
DL-alanine|InChI=1S/C3H7NO2/c1-2(4)3(5)6/h2H,4H2,1H3,(H,5,6)           |QNAYBMKLOCPYGJ-UHFFFAOYSA-N
L-alanine|InChI=1S/C3H7NO2/c1-2(4)3(5)6/h2H,4H2,1H3,(H,5,6)/t2-/m0/s1 |QNAYBMKLOCPYGJ-REOHCLBHSA-N
D-alanine|InChI=1S/C3H7NO2/c1-2(4)3(5)6/h2H,4H2,1H3,(H,5,6)/t2-/m1/s1 |QNAYBMKLOCPYGJ-UWTATZPHSA-N

