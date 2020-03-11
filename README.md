# Chemical structures in chemistry
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
# Chemical structures in chemistry files
Important chemistry files including chemical structures

extension|source|Extraction tool
----|----|---
.mol|multiple source|[OpenBabel](http://openbabel.org/wiki/Main_Page)
.cdx|ChemDraw|[OpenBabel](http://openbabel.org/wiki/Main_Page)
.mnova|MestreNova|[Mnova](https://mestrelab.com/download/mnova/)

extension|source|Visualization tool
----|----|---
.mol|any source|[JSmol](http://wiki.jmol.org/index.php/Jmol_JavaScript_Object#JSmol)


## OpenBabel

conversion of .cdx 
```
babel -icdx  'mymols.cdx' -omol 'outputfile.mol'
```
## Mnova
Requires a [licence](https://www.unige.ch/sciences/chiorg/mnova/).
Extraction done using a script called from unix:
```
/usr/bin/mnova "/usr/username/myScript.qs" -sf "myFunction",0.1,10,true,off // generic for user-defined script
/usr/bin/mnova "NMReDATAExporter.qs" //for NMReDATA - this script my be a starting point for a user-defined script to write
babel -isdf  'mymols.cdx' -omol 'outputfile.mol' //if the data are not in .mol format already
```
