<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <title>Pelin osallistujat</title>
        <?xml-stylesheet type = "text/css" href="books.css"?>
      </head>
      <body>
        <center>
        <h1>Kirjat Lukuvuoden mukaisessa järjestyksessä</h1>
          <table border="2">
            <tr>
              <th>title</th>
              <th>author</th>
              <th>year</th>
              <th>publisher</th>
              <th>translator</th>
              <th>original</th>
            </tr>
            <xsl:for-each select="books/book">
            <xsl:sort select="author" />
            
              <tr>
                <td>
                  <xsl:value-of select="title"/>
                </td>
                <xsl:choose>
                <xsl:when test="year &lt; 2000">
                <td bgcolor="#ff00ff">
                  <xsl:value-of select="author"/>
                </td>
                </xsl:when>
                <xsl:otherwise>
                <td>
                <xsl:value-of select="author"/>
                </td>
                </xsl:otherwise>
                </xsl:choose>
                <td>
                  <xsl:value-of select="year"/>
                </td>
                <td>
                  <xsl:value-of select="publisher"/>
                </td>
                <td>
                  <xsl:value-of select="translator"/>
                </td>
                <td>
                  <xsl:value-of select="original"/>
                </td>
              </tr>

            </xsl:for-each>
          </table>
        </center>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>