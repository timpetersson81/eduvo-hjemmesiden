<!-- Pricing page content section -->
<section class="features">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; color: var(--bg-deep); margin-bottom: 1rem; font-weight: 600; letter-spacing: -0.04em;">Priser</h1>
            <p style="color: var(--text-dark); font-size: 1.1rem; line-height: 1.6; opacity: 0.8;">Transparente priser for foreningsadministration</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 900px; margin: 0 auto;">
            <div class="feature-card" style="text-align: center;">
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">Starter</h3>
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--accent); margin-bottom: 0.5rem;">299 kr</div>
                <div style="color: var(--text-dark); opacity: 0.7; margin-bottom: 2rem;">per måned</div>
                <ul style="text-align: left; list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Op til 100 medlemmer</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Medlemsadministration</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Basiskommunikation</li>
                    <li style="padding: 0.5rem 0;">✓ Email support</li>
                </ul>
                <a href="<?= url('signup') ?>" class="cta-btn" style="display: block; text-align: center;">Kom i gang</a>
            </div>
            
            <div class="feature-card" style="text-align: center; border: 2px solid var(--accent);">
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--accent);">Professional</h3>
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--accent); margin-bottom: 0.5rem;">599 kr</div>
                <div style="color: var(--text-dark); opacity: 0.7; margin-bottom: 2rem;">per måned</div>
                <ul style="text-align: left; list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Op til 500 medlemmer</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Alle funktioner</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Avanceret rapportering</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid #dce4f5;">✓ Prioriteret support</li>
                    <li style="padding: 0.5rem 0;">✓ Telefon support</li>
                </ul>
                <a href="<?= url('signup') ?>" class="cta-btn" style="display: block; text-align: center;">Vælg Professional</a>
            </div>
        </div>
    </div>
</section>