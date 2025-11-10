<!-- Contact page content section -->
<section class="features">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; color: var(--bg-deep); margin-bottom: 1rem; font-weight: 600; letter-spacing: -0.04em;">Kontakt</h1>
            <p style="color: var(--text-dark); font-size: 1.1rem; line-height: 1.6; opacity: 0.8;">Kom i kontakt med edovo teamet</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
            <div class="feature-card">
                <h3>Send os en besked</h3>
                
                <form action="#" method="POST" style="display: grid; gap: 1rem;">
                    <div>
                        <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Navn</label>
                        <input type="text" id="name" name="name" required 
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Email</label>
                        <input type="email" id="email" name="email" required 
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <div>
                        <label for="subject" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Emne</label>
                        <input type="text" id="subject" name="subject" required
                               style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit;">
                    </div>
                    
                    <div>
                        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-dark);">Besked</label>
                        <textarea id="message" name="message" rows="5" required
                                  style="width: 100%; padding: 0.75rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-size: 1rem; font-family: inherit; resize: vertical;"></textarea>
                    </div>
                    
                    <button type="submit" class="cta-btn" style="width: 100%; margin-top: 1rem;">
                        Send besked
                    </button>
                </form>
            </div>
            
            <div class="feature-card">
                <h3>Kontaktinformation</h3>
                
                <div style="display: grid; gap: 1.5rem;">
                    <div>
                        <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 1rem;">Email</h4>
                        <p style="margin: 0;">kontakt@edovo.dk</p>
                    </div>
                    
                    <div>
                        <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 1rem;">Telefon</h4>
                        <p style="margin: 0;">+45 12 34 56 78</p>
                    </div>
                    
                    <div>
                        <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 1rem;">Adresse</h4>
                        <p style="margin: 0;">
                            edovo ApS<br>
                            Eksempelvej 123<br>
                            2100 København Ø
                        </p>
                    </div>
                    
                    <div>
                        <h4 style="color: var(--accent); margin-bottom: 0.5rem; font-size: 1rem;">Support</h4>
                        <p style="margin: 0;">Vi svarer typisk inden for 24 timer på hverdage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (max-width: 767px) {
    .features .container > div:last-child {
        grid-template-columns: 1fr !important;
    }
}
</style>