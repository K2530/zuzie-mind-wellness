const fs = require('fs');
const { translate } = require('@vitalets/google-translate-api');

async function main() {
    const data = JSON.parse(fs.readFileSync('dump.json', 'utf8'));
    const items = data.assessment_page_items;

    const translateCache = new Map();

    async function getTranslation(text) {
        if (!text || typeof text !== 'string') return text;
        if (translateCache.has(text)) return translateCache.get(text);
        try {
            const res = await translate(text, { to: 'en' });
            translateCache.set(text, res.text);
            return res.text;
        } catch (e) {
            console.error("Error translating:", text, e.message);
            return text;
        }
    }

    console.log(`Found ${items.length} assessments. Translating...`);

    for (let i = 0; i < items.length; i++) {
        let item = items[i];
        console.log(`Processing [${i+1}/${items.length}]: ${item.slug}`);

        if (!item.title_en) {
            item.title_en = await getTranslation(item.title);
        }
        if (!item.desc_en) {
            item.desc_en = await getTranslation(item.desc);
        }

        if (item.options) {
            item.options_en = {};
            for (const key in item.options) {
                item.options_en[key] = await getTranslation(item.options[key]);
            }
        }

        if (item.questions) {
            for (let j = 0; j < item.questions.length; j++) {
                let q = item.questions[j];
                if (typeof q === 'string') {
                    item.questions[j] = {
                        text: q,
                        text_en: await getTranslation(q)
                    };
                } else if (typeof q === 'object') {
                    if (!q.text_en) {
                        q.text_en = await getTranslation(q.text);
                    }
                    if (q.options) {
                        q.options_en = {};
                        for (const key in q.options) {
                            q.options_en[key] = await getTranslation(q.options[key]);
                        }
                    }
                }
            }
        }
        
        // Wait to avoid rate limits
        await new Promise(r => setTimeout(r, 500));
    }

    fs.writeFileSync('translated.json', JSON.stringify(data, null, 2), 'utf8');
    console.log("Done!");
}

main();
