// Every page that shows dreams is generated from _data/dreams.json:
// one page per dream, the paginated lists, the search page and the random redirect,
// in each language.

interface Dream {
  id: number;
  date: string;
  place?: string;
  author?: string;
  body: string;
}

const languages = ["es", "gl"];

export default function* ({ dreams, i18n, paginate }: Lume.Data) {
  for (const lang of languages) {
    const t = i18n[lang];
    const other = i18n[languages.find((l) => l !== lang)!];

    const localized = (dreams as Dream[]).map((dream) => {
      const [year, month, day] = dream.date.split("-").map(Number);
      return {
        ...dream,
        url: `${t.dreamPath}${dream.id}/`,
        dateText: `${day} de ${t.months[month - 1]} de ${year}`,
      };
    });

    for (const dream of localized) {
      yield {
        url: dream.url,
        layout: "layouts/dream.vto",
        lang,
        alternate: `${other.dreamPath}${dream.id}/`,
        description: excerpt(dream.body),
        dream,
      };
    }

    const pageUrl = (n: number) => n === 1 ? t.home : `${t.home}page/${n}/`;
    const pages = [...paginate(localized, { url: pageUrl, size: 10 })];

    for (const page of pages) {
      yield {
        ...page,
        layout: "layouts/list.vto",
        lang,
        alternate: other.home,
        pageUrls: pages.map((p) => p.url),
      };
    }

    yield {
      url: t.searchUrl,
      layout: "layouts/search.vto",
      lang,
      alternate: other.searchUrl,
      results: localized,
    };

    yield {
      url: t.randomUrl,
      layout: "layouts/random.vto",
      lang,
      results: localized,
    };
  }
}

/** The meta description of a dream: its first 80 characters, as the old site did */
function excerpt(html: string): string {
  const text = html.replace(/<[^>]+>/g, " ").replace(/&nbsp;/g, " ").replace(/\s+/g, " ").trim();
  return text.length > 80 ? text.slice(0, 80).trimEnd() + "..." : text;
}
