<div id="curtain" data-state="cover" aria-hidden="true">
    <div class="curtain-panel curtain-panel--left"></div>
    <div class="curtain-panel curtain-panel--right"></div>
</div>

<noscript><style>#curtain { display: none; }</style></noscript>

<style>
    #curtain {
        position: fixed;
        inset: 0;
        z-index: 9999;
        display: flex;
    }
    .curtain-panel {
        flex: 1;
        background: #0f172a;
        transition: transform .8s cubic-bezier(.76, 0, .24, 1);
    }
    .curtain-logo {
        position: absolute;
        inset: 0;
        display: grid;
        place-items: center;
        color: #fff;
        font-size: 1.5rem;
        font-weight: 600;
        letter-spacing: .1em;
        transition: opacity .4s .4s, transform .4s .4s;
    }

    /* Ouvert : les panneaux partent sur les côtés */
    #curtain[data-state="open"] { pointer-events: none; visibility: hidden; transition: visibility 0s .9s; }
    #curtain[data-state="open"] .curtain-panel { transition-delay: .25s; }
    #curtain[data-state="open"] .curtain-panel--left  { transform: translateX(-100%); }
    #curtain[data-state="open"] .curtain-panel--right { transform: translateX(100%); }
    #curtain[data-state="open"] .curtain-logo { opacity: 0; transform: translateY(-12px); transition-delay: 0s; }

    @media (prefers-reduced-motion: reduce) {
        #curtain, #curtain * { transition-duration: .01s !important; transition-delay: 0s !important; }
    }
</style>

<script>
    (() => {
        const curtain = document.getElementById('curtain');
        const open = () => { curtain.dataset.state = 'open'; };

        // Entrée : on ouvre le rideau quand la page est chargée
        window.addEventListener('load', () => requestAnimationFrame(open), { once: true });
        setTimeout(open, 5000); // sécurité

        // Retour arrière avec le cache du navigateur (bfcache)
        window.addEventListener('pageshow', (e) => { if (e.persisted) open(); });

        // Sortie : on referme le rideau avant de changer de page
        document.addEventListener('click', (e) => {
            const a = e.target.closest('a');

            if (!a || e.defaultPrevented || e.button !== 0
                || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey
                || a.target === '_blank' || a.hasAttribute('download')
                || a.origin !== location.origin
                || (a.pathname === location.pathname && a.search === location.search)) {
                return;
            }

            e.preventDefault();
            curtain.dataset.state = 'cover';
            setTimeout(() => { location.href = a.href; }, 700);
        });
    })();
</script>
