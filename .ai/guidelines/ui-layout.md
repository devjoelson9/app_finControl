# UI/UX Refactor – Secure Financial System Layout

## Objective

Refactor the application layout to provide a modern, professional, and security-focused user interface suitable for a financial control system.

The new UI must improve:
- Navigation
- Structure
- Visual identity
- User experience

---

## Layout Structure

Create a main application layout composed of:

- **Navbar (top)**
- **Sidebar (left)**
- **Main content area**
- **Footer (bottom)**

The layout must be reusable and centralized (do not duplicate code across views).

---

## Navbar

The navbar should include:

- Application logo (`<x-application-logo>`)
- Application name (FinControl)
- Authenticated user name
- Logout action

### Guidelines

- Keep it clean and minimal
- Use horizontal alignment
- Ensure responsive behavior
- Maintain consistent spacing

---

## Sidebar

Create a sidebar with navigation links:

- Dashboard
- Transactions / Records (placeholder)
- Reports (placeholder)
- Settings (placeholder)

### Requirements

- Highlight active route
- Use icons (Heroicons or similar if available)
- Support collapsible behavior (optional)
- Maintain vertical alignment
- Ensure accessibility

---

## Footer

Add a simple footer containing:

- `FinControl © {current_year}`
- Optional: "Sistema de controle financeiro seguro"

### Guidelines

- Keep minimal
- Centered or well-aligned
- Do not clutter UI

---

## Visual Identity (Security-Focused)

The design must convey:

- Trust
- Stability
- Professionalism

### Recommended Colors

- Dark blue
- Gray
- White

### Avoid

- Bright or flashy colors
- Playful or informal styles

---

## UI/UX Standards

- Use consistent spacing (Tailwind spacing scale)
- Maintain typography hierarchy
- Add hover and focus states
- Ensure responsiveness (mobile and desktop)
- Follow Tailwind CSS best practices

---

## Components & Reusability

- Extract reusable components:
  - Navbar
  - Sidebar
  - Footer
  - Layout wrapper
- Avoid duplicated layout code
- Keep components clean and modular

---

## Constraints

- Do not break authentication flow
- Do not modify existing routes behavior
- Maintain compatibility with Breeze (Livewire/Volt)

---

## Expected Outcome

After implementation, the system should:

- Have a dashboard-style layout
- Provide intuitive navigation
- Look like a secure financial system
- Be scalable for future features

---

## After Implementation

Provide:

1. List of created/modified files
2. Explanation of:
   - Layout structure
   - Component organization
   - Navigation flow
