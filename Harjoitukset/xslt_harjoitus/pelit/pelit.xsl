<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <title>Pelin osallistujat</title>
        <link rel="stylesheet" type="text/css" href="pelit.css"/>
      </head>
      <body>
        <center>
          <table border="2">
            <tr>
              <th>pvm</th>
              <th>ottelu</th>
              <th>Tulos</th>
            </tr>
            <xsl:for-each select="pelit/ottelu">
            <xsl:sort select="kotitulos" />
              <tr>
                <td>
                  <xsl:value-of select="pvm"/>
                </td>
                <td>
                  <xsl:value-of select="kotijoukkue"/>
                  -
                  <xsl:value-of select="vierasjoukkue"/>
                </td>
                <td>
                  <xsl:value-of select="kotitulos"/>
                  -
                  <xsl:value-of select="vierastulos"/>
                </td>
              </tr>
            </xsl:for-each>
          </table>
        </center>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>