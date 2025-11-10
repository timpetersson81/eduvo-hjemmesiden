<!-- Hero section with dashboard mock -->
<section class="hero" id="forside" style="background-color: var(--bg-deep); color: var(--text-primary); padding: 6rem 0;">
  <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
    <div>
      <h1 style="font-size: 2.6rem; margin-bottom: 1rem; line-height: 1.2; letter-spacing: -0.04em; color: var(--text-primary); font-weight: 600;">Alt samlet ét sted for jeres forening</h1>
      <p style="color: var(--text-dim); max-width: 30rem; margin-bottom: 1.5rem; font-size: 1rem; line-height: 1.5; font-weight: 400;">edovo samler medlemsadministration, bestyrelsesarbejde og kommunikation ét sted. Mindre administration, mere overblik – og ingen flere regneark der flyver rundt.</p>
      <a href="<?= url('signup') ?>" class="cta-btn">Prøv gratis</a>
    </div>
    <div>
      <div style="background-color: var(--bg-card); border-radius: 1rem; box-shadow: 0 8px 20px rgba(0,0,0,0.4); padding: 1rem 1.25rem; color: var(--text-primary); border: 1px solid rgba(255,255,255,0.08); font-size: .8rem; line-height: 1.4; display: grid; gap: .75rem; max-width: 360px; margin-left: auto;">
        <div style="display: flex; justify-content: space-between; font-size: .75rem; color: var(--text-dim); font-weight: 500;">
          <span>Overblik i dag</span>
          <span>Opdateret for 3 min siden</span>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3,1fr); gap: .5rem;">
          <div style="background-color: rgba(255,255,255,0.05); border-radius: .5rem; padding: .6rem .75rem; border: 1px solid rgba(255,255,255,0.07);">
            <div style="color: var(--text-primary); font-weight: 600; font-size: 1rem; line-height: 1.2;">214</div>
            <div style="color: var(--text-dim); font-size: .7rem;">Aktive medlemmer</div>
          </div>
          <div style="background-color: rgba(255,255,255,0.05); border-radius: .5rem; padding: .6rem .75rem; border: 1px solid rgba(255,255,255,0.07);">
            <div style="color: var(--text-primary); font-weight: 600; font-size: 1rem; line-height: 1.2;">7</div>
            <div style="color: var(--text-dim); font-size: .7rem;">Afventer betaling</div>
          </div>
          <div style="background-color: rgba(255,255,255,0.05); border-radius: .5rem; padding: .6rem .75rem; border: 1px solid rgba(255,255,255,0.07);">
            <div style="color: var(--text-primary); font-weight: 600; font-size: 1rem; line-height: 1.2;">3</div>
            <div style="color: var(--text-dim); font-size: .7rem;">Åbne bestyrelsesopgaver</div>
          </div>
        </div>

        <table style="width: 100%; border-collapse: collapse; font-size: .7rem;">
          <thead>
            <tr>
              <th style="color: var(--text-dim); font-weight: 500; text-align: left; padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.07); font-size: .7rem;">Navn</th>
              <th style="color: var(--text-dim); font-weight: 500; text-align: left; padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.07); font-size: .7rem;">Status</th>
              <th style="color: var(--text-dim); font-weight: 500; text-align: left; padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.07); font-size: .7rem;">Rolle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="color: var(--text-primary); padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;">Maja Østergaard</td>
              <td style="color:#4ade80; padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;">Betalt</td>
              <td style="padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;"><span style="display: inline-block; background-color: rgba(59,130,246,0.15); border: 1px solid rgba(59,130,246,0.4); color: var(--accent); border-radius: 999px; padding: .2rem .4rem; font-size: .65rem; font-weight: 500; line-height: 1.2; white-space: nowrap;">Medlem</span></td>
            </tr>
            <tr>
              <td style="color: var(--text-primary); padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;">Jonas Leth</td>
              <td style="color:#facc15; padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;">Afventer</td>
              <td style="padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;"><span style="display: inline-block; background-color: rgba(59,130,246,0.15); border: 1px solid rgba(59,130,246,0.4); color: var(--accent); border-radius: 999px; padding: .2rem .4rem; font-size: .65rem; font-weight: 500; line-height: 1.2; white-space: nowrap;">Træner</span></td>
            </tr>
            <tr>
              <td style="color: var(--text-primary); padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;">Louise Kjær</td>
              <td style="color:#4ade80; padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;">Betalt</td>
              <td style="padding: .4rem .4rem; border-bottom: 1px solid rgba(255,255,255,0.04); font-weight: 400;"><span style="display: inline-block; background-color: rgba(59,130,246,0.15); border: 1px solid rgba(59,130,246,0.4); color: var(--accent); border-radius: 999px; padding: .2rem .4rem; font-size: .65rem; font-weight: 500; line-height: 1.2; white-space: nowrap;">Bestyrelse</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Features section -->
<section class="features" id="features" style="padding: 4rem 0; background-color: var(--bg-light);">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 style="font-size: 2rem; color: var(--bg-deep); margin-bottom: 1rem; font-weight: 600;">Vigtige funktioner</h2>
      <p style="color: var(--text-dark); font-size: 1.1rem; opacity: 0.7;">Alt hvad din forening har brug for, samlet ét sted</p>
    </div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
      <div style="background: white; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="color: var(--bg-deep); margin-bottom: 0.75rem; font-size: 1.2rem; font-weight: 600;">Medlemsadministration</h3>
        <p style="color: var(--text-dark); opacity: 0.8; line-height: 1.5; margin-bottom: 1rem;">Ét samlet medlemskartotek med kontaktinfo, kontingentstatus og historik.</p>
        <div style="background: var(--bg-light); border-radius: 0.5rem; padding: 0.75rem; font-size: 0.85rem; color: var(--text-dark); border: 1px solid rgba(0,0,0,0.08);">
          <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
            <span style="font-weight: 500;">Total medlemmer:</span>
            <span style="color: var(--accent); font-weight: 600;">214</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="font-weight: 500;">Afventer betaling:</span>
            <span style="color: #f59e0b; font-weight: 600;">7</span>
          </div>
        </div>
      </div>
      
      <div style="background: white; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="color: var(--bg-deep); margin-bottom: 0.75rem; font-size: 1.2rem; font-weight: 600;">Bestyrelsesadministration</h3>
        <p style="color: var(--text-dark); opacity: 0.8; line-height: 1.5; margin-bottom: 1rem;">Automatisk mødestyring, opgaver og referater ét sted.</p>
        <div style="background: var(--bg-light); border-radius: 0.5rem; padding: 0.75rem; font-size: 0.85rem; color: var(--text-dark); border: 1px solid rgba(0,0,0,0.08);">
          <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
            <span style="font-weight: 500;">Næste møde:</span>
            <span style="color: var(--accent); font-weight: 600;">15. nov</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="font-weight: 500;">Åbne opgaver:</span>
            <span style="color: #f59e0b; font-weight: 600;">3</span>
          </div>
        </div>
      </div>
      
      <div style="background: white; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="color: var(--bg-deep); margin-bottom: 0.75rem; font-size: 1.2rem; font-weight: 600;">Frivillig opgave udbud</h3>
        <p style="color: var(--text-dark); opacity: 0.8; line-height: 1.5; margin-bottom: 1rem;">Point-system hvor frivilligt arbejde modregnes i kontingent.</p>
        <div style="background: var(--bg-light); border-radius: 0.5rem; padding: 0.75rem; font-size: 0.85rem; color: var(--text-dark); border: 1px solid rgba(0,0,0,0.08);">
          <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
            <span style="font-weight: 500;">Aktive opgaver:</span>
            <span style="color: var(--accent); font-weight: 600;">12</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="font-weight: 500;">Optjente point:</span>
            <span style="color: #10b981; font-weight: 600;">2.847 kr</span>
          </div>
        </div>
      </div>
      
      <div style="background: white; border-radius: 1rem; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.05);">
        <h3 style="color: var(--bg-deep); margin-bottom: 0.75rem; font-size: 1.2rem; font-weight: 600;">Automatisk dokumenthåndtering</h3>
        <p style="color: var(--text-dark); opacity: 0.8; line-height: 1.5; margin-bottom: 1rem;">Email-integration med søgbar tekst og notifikationer.</p>
        <div style="background: var(--bg-light); border-radius: 0.5rem; padding: 0.75rem; font-size: 0.85rem; color: var(--text-dark); border: 1px solid rgba(0,0,0,0.08);">
          <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
            <span style="font-weight: 500;">Nye dokumenter:</span>
            <span style="color: var(--accent); font-weight: 600;">5</span>
          </div>
          <div style="display: flex; justify-content: space-between;">
            <span style="font-weight: 500;">Søgbare filer:</span>
            <span style="color: #10b981; font-weight: 600;">1.247</span>
          </div>
        </div>
      </div>
    </div>
    
    <div style="text-align: center; margin-top: 2.5rem;">
      <a href="<?= url('features') ?>" style="display: inline-block; background: var(--accent); color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; text-decoration: none; font-weight: 500; transition: all 0.2s; box-shadow: 0 2px 8px rgba(59,130,246,0.25);">Se alle funktioner</a>
    </div>
  </div>
</section>

<style>
/* Mobile responsive for hero */
@media (max-width: 767px) {
  .hero .container {
    grid-template-columns: 1fr !important;
  }
  
  .hero div:last-child > div {
    margin-left: 0 !important;
    max-width: 100% !important;
  }
}
</style>