import lume from "lume/mod.ts";
import sitemap from "lume/plugins/sitemap.ts";

const site = lume({
  location: new URL("https://suenosdecuarentena.com"),
});

site.ignore("README.md");
site.add("assets");
site.use(sitemap());

export default site;
