<!-- 404 Error page section -->
<section class="features">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto; text-align: center;">
            <div class="feature-card">
                
                <div style="margin-bottom: 2rem;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto; display: block;">
                        <circle cx="12" cy="12" r="10" stroke="var(--accent)" stroke-width="1.5" fill="none"/>
                        <path d="M12 8v4" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M12 16h.01" stroke="var(--accent)" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                
                <div style="font-size: 4rem; font-weight: 700; color: var(--accent); margin-bottom: 1rem; line-height: 1; letter-spacing: -0.04em;">404</div>
                <h1 style="font-size: 1.8rem; color: var(--text-dark); margin-bottom: 1rem; font-weight: 600; letter-spacing: -0.04em; font-family: 'Poppins', system-ui, sans-serif;">Siden blev ikke fundet</h1>
                <p style="color: var(--text-dark); opacity: 0.7; font-size: 1.1rem; line-height: 1.6; margin-bottom: 2rem;">
                    Beklager, men den side du leder efter eksisterer ikke. 
                    Den kan være flyttet, slettet eller du har indtastet en forkert adresse.
                </p>
                
                <div style="display: flex; justify-content: center; gap: 1rem; margin-bottom: 3rem; flex-wrap: wrap;">
                    <a href="<?= url('forside') ?>" class="cta-btn">
                        Gå til forsiden
                    </a>
                    <button onclick="history.back()" 
                            style="background: transparent; color: var(--text-dark); padding: 0.75rem 1.5rem; border: 1px solid #dce4f5; border-radius: var(--radius-sm); font-weight: 500; cursor: pointer; font-family: inherit; font-size: inherit;">
                        Gå tilbage
                    </button>
                </div>
                
                <div style="background: var(--bg-light); border: 1px solid #dce4f5; border-radius: var(--radius-sm); padding: 2rem; margin-top: 2rem;">
                    <h3 style="font-size: 1.2rem; color: var(--accent); margin-bottom: 1.5rem; font-weight: 600; font-family: 'Poppins', system-ui, sans-serif;">Måske leder du efter:</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 0.5rem;"><a href="<?= url('features') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Funktioner</a></li>
                            <li style="margin-bottom: 0.5rem;"><a href="<?= url('pricing') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Priser</a></li>
                            <li style="margin-bottom: 0.5rem;"><a href="<?= url('how') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Sådan virker det</a></li>
                        </ul>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <li style="margin-bottom: 0.5rem;"><a href="<?= url('about') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Om os</a></li>
                            <li style="margin-bottom: 0.5rem;"><a href="<?= url('contact') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Kontakt</a></li>
                            <li style="margin-bottom: 0.5rem;"><a href="<?= url('login') ?>" style="color: var(--accent); text-decoration: none; font-weight: 500;">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>