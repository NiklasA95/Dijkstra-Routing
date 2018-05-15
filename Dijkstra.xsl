<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" encoding="iso-8859-1"/>

<xsl:template match="*">
	
	<h4>XSL-Output:</h4>
	lat:<xsl:value-of select="$zlat"/><br></br>
	long:<xsl:value-of select="$zlong"/> 
 </xsl:template>
</xsl:stylesheet>
