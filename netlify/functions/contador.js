export default async () => {
    const blob = await import('@netlify/blobs');
    const store = blob.getStore("contador");

    let visitas = await store.get("visitas");

    if (!visitas) {
        visitas = 0;
    } else {
        visitas = parseInt(visitas);
    }

    visitas++;

    await store.set("visitas", visitas.toString());

    return new Response(JSON.stringify({ visitas }), {
        headers: { "Content-Type": "application/json" }
    });
};
