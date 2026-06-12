import { useEffect, useRef, useState } from "react";
import { Code, Database, Globe, Server, GitBranch, Cpu, Shield, Layers, Zap, TreePine, GitMerge, Brain, Lightbulb, Settings } from "lucide-react";

/* ══════════════════════════════════════
   SVG Logos
══════════════════════════════════════ */
const JSLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#F7DF1E" />
    <path d="M9 25.3l2.3-1.4c.4.8.8 1.4 1.7 1.4.9 0 1.4-.3 1.4-1.7V14h2.8v9.7c0 2.8-1.6 4-4 4-2.1 0-3.4-1.1-4.2-2.4zM19 25l2.3-1.3c.6 1 1.3 1.7 2.7 1.7 1.1 0 1.8-.6 1.8-1.3 0-.9-.7-1.2-1.9-1.8l-.7-.3c-1.9-.8-3.1-1.8-3.1-3.9 0-1.9 1.5-3.4 3.8-3.4 1.6 0 2.8.6 3.6 2l-2.2 1.4c-.4-.8-1-1.1-1.7-1.1-.8 0-1.3.5-1.3 1.1 0 .8.5 1.1 1.6 1.6l.7.3c2.2 1 3.4 2 3.4 4.1 0 2.4-1.8 3.6-4.3 3.6-2.4 0-4-1.2-4.7-2.7z" fill="#000" />
  </svg>
);
const PHPLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#777BB4" />
    <text x="5" y="21" fontFamily="Arial" fontWeight="bold" fontSize="11" fill="#fff">PHP</text>
  </svg>
);
const JavaLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#E76F00" />
    <text x="3" y="21" fontFamily="Arial" fontWeight="bold" fontSize="10" fill="#fff">JAVA</text>
  </svg>
);
const CLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#5C6BC0" />
    <text x="9" y="22" fontFamily="Arial" fontWeight="bold" fontSize="16" fill="#fff">C</text>
  </svg>
);
const CSharpLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#9B4993" />
    <text x="3" y="22" fontFamily="Arial" fontWeight="bold" fontSize="13" fill="#fff">C#</text>
  </svg>
);
const HTMLLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#E44D26" />
    <text x="2" y="22" fontFamily="Arial" fontWeight="bold" fontSize="9" fill="#fff">HTML5</text>
  </svg>
);
const CSSLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#1572B6" />
    <text x="3" y="22" fontFamily="Arial" fontWeight="bold" fontSize="9" fill="#fff">CSS3</text>
  </svg>
);
const BootstrapLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="6" fill="#7952B3" />
    <text x="8" y="23" fontFamily="Arial" fontWeight="bold" fontSize="17" fill="#fff">B</text>
  </svg>
);
const JQueryLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#0769AD" />
    <text x="2" y="21" fontFamily="Arial" fontWeight="bold" fontSize="8.5" fill="#fff">jQuery</text>
  </svg>
);
const LaravelLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#FF2D20" />
    <text x="2" y="22" fontFamily="Arial" fontWeight="bold" fontSize="7.5" fill="#fff">Laravel</text>
  </svg>
);
const MySQLLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#00618A" />
    <text x="2" y="22" fontFamily="Arial" fontWeight="bold" fontSize="8" fill="#fff">MySQL</text>
  </svg>
);
const GitLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#F05032" />
    <text x="6" y="22" fontFamily="Arial" fontWeight="bold" fontSize="11" fill="#fff">Git</text>
  </svg>
);
const GitHubLogo = () => (
  <svg viewBox="0 0 24 24" width="22" height="22" style={{ flexShrink: 0 }} fill="currentColor">
    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.335-1.755-1.335-1.755-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.295 24 12c0-6.63-5.37-12-12-12z" />
  </svg>
);
const PostmanLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#FF6C37" />
    <circle cx="16" cy="16" r="8" fill="#fff" opacity="0.9" />
    <circle cx="16" cy="16" r="5" fill="#FF6C37" />
    <circle cx="16" cy="16" r="2.5" fill="#fff" />
  </svg>
);
const VSCodeLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#007ACC" />
    <text x="2" y="22" fontFamily="Arial" fontWeight="bold" fontSize="7.5" fill="#fff">VSCode</text>
  </svg>
);
const XAMPPLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#FB7A24" />
    <text x="2" y="22" fontFamily="Arial" fontWeight="bold" fontSize="8.5" fill="#fff">XAMPP</text>
  </svg>
);
const LaragonLogo = () => (
  <svg viewBox="0 0 32 32" width="22" height="22" style={{ flexShrink: 0 }}>
    <rect width="32" height="32" rx="4" fill="#2ECC71" />
    <text x="2" y="22" fontFamily="Arial" fontWeight="bold" fontSize="7.5" fill="#fff">Laragon</text>
  </svg>
);

/* ══════════════════════════════════════
   Skill Chip
══════════════════════════════════════ */
interface Skill {
  label: string;
  logo: React.ReactNode;
  chipColor?: string;
}

const SkillChip = ({ label, logo, chipColor }: Skill) => (
  <span
    className="skill-chip flex items-center gap-1.5 px-3 py-1.5 rounded-full text-sm font-medium select-none"
    style={chipColor ? { background: chipColor } : undefined}
  >
    {logo}
    {label}
  </span>
);

/* ══════════════════════════════════════
   useInView hook
══════════════════════════════════════ */
function useInView(threshold = 0.15) {
  const ref = useRef<HTMLDivElement>(null);
  const [visible, setVisible] = useState(false);
  useEffect(() => {
    const el = ref.current;
    if (!el) return;
    const obs = new IntersectionObserver(
      ([entry]) => { if (entry.isIntersecting) { setVisible(true); obs.disconnect(); } },
      { threshold }
    );
    obs.observe(el);
    return () => obs.disconnect();
  }, [threshold]);
  return { ref, visible };
}

/* ══════════════════════════════════════
   Category Card
══════════════════════════════════════ */
interface Category {
  icon: React.ElementType;
  title: string;
  accentColor: string;
  skills: Skill[];
}

const CategoryCard = ({ category, delay }: { category: Category; delay: number }) => {
  const { ref, visible } = useInView();
  const Icon = category.icon;

  return (
    <div
      ref={ref}
      className="skills-card"
      style={{
        opacity: visible ? 1 : 0,
        transform: visible ? "translateY(0)" : "translateY(24px)",
        transition: `opacity 0.55s ease ${delay}ms, transform 0.55s ease ${delay}ms`,
      }}
    >
      {/* Coloured top accent bar */}
      <div className="card-accent-bar" style={{ background: category.accentColor }} />

      <div className="p-7">
        {/* Icon */}
        <div className="skills-card-icon mb-5" style={{ background: `${category.accentColor}22` }}>
          <Icon className="w-7 h-7" style={{ color: category.accentColor }} />
        </div>

        <h3 className="text-lg font-bold mb-4 text-foreground">{category.title}</h3>

        <div className="flex flex-wrap gap-2">
          {category.skills.map((skill) => (
            <SkillChip key={skill.label} {...skill} />
          ))}
        </div>
      </div>
    </div>
  );
};

/* ══════════════════════════════════════
   Data
══════════════════════════════════════ */
const skillCategories: Category[] = [
  {
    icon: Code,
    title: "Programming Languages",
    accentColor: "#8B5CF6",
    skills: [
      { label: "JavaScript", logo: <JSLogo />, chipColor: "#FEF9C3" },
      { label: "PHP",        logo: <PHPLogo />, chipColor: "#EDE9FE" },
      { label: "Java",       logo: <JavaLogo />, chipColor: "#FFEDD5" },
      { label: "C",          logo: <CLogo />,   chipColor: "#E0E7FF" },
      { label: "C#",         logo: <CSharpLogo />, chipColor: "#F3E8FF" },
    ],
  },
  {
    icon: Globe,
    title: "Frontend Development",
    accentColor: "#EC4899",
    skills: [
      { label: "HTML5",     logo: <HTMLLogo />,      chipColor: "#FFE4E1" },
      { label: "CSS3",      logo: <CSSLogo />,       chipColor: "#DBEAFE" },
      { label: "Bootstrap", logo: <BootstrapLogo />, chipColor: "#EDE9FE" },
      { label: "jQuery",    logo: <JQueryLogo />,    chipColor: "#E0F2FE" },
    ],
  },
  {
    icon: Server,
    title: "Backend Development",
    accentColor: "#10B981",
    skills: [
      { label: "Laravel",             logo: <LaravelLogo />,                                           chipColor: "#FFE4E1" },
      { label: "REST APIs",           logo: <Zap   className="w-[22px] h-[22px]" style={{ color: "#F59E0B", flexShrink: 0 }} />, chipColor: "#FFFBEB" },
      { label: "MVC Architecture",    logo: <Layers className="w-[22px] h-[22px]" style={{ color: "#3B82F6", flexShrink: 0 }} />, chipColor: "#EFF6FF" },
      { label: "Auth & Authorization",logo: <Shield className="w-[22px] h-[22px]" style={{ color: "#10B981", flexShrink: 0 }} />, chipColor: "#ECFDF5" },
    ],
  },
  {
    icon: Database,
    title: "Database",
    accentColor: "#F59E0B",
    skills: [
      { label: "MySQL",            logo: <MySQLLogo />,                                                  chipColor: "#E0F2FE" },
      { label: "SQL Optimization", logo: <Zap      className="w-[22px] h-[22px]" style={{ color: "#F59E0B", flexShrink: 0 }} />, chipColor: "#FFFBEB" },
      { label: "Database Design",  logo: <Database  className="w-[22px] h-[22px]" style={{ color: "#3B82F6", flexShrink: 0 }} />, chipColor: "#EFF6FF" },
    ],
  },
  {
    icon: GitBranch,
    title: "Tools & Platforms",
    accentColor: "#6366F1",
    skills: [
      { label: "Git",     logo: <GitLogo />,     chipColor: "#FFE4E1" },
      { label: "GitHub",  logo: <GitHubLogo />,  chipColor: "#F3F4F6" },
      { label: "Postman", logo: <PostmanLogo />, chipColor: "#FFE4D4" },
      { label: "VS Code", logo: <VSCodeLogo />,  chipColor: "#DBEAFE" },
      { label: "XAMPP",   logo: <XAMPPLogo />,   chipColor: "#FFEDD5" },
      { label: "Laragon", logo: <LaragonLogo />, chipColor: "#DCFCE7" },
    ],
  },
  {
    icon: Cpu,
    title: "Core Concepts",
    accentColor: "#A855F7",
    skills: [
      { label: "Data Structures", logo: <TreePine  className="w-[22px] h-[22px]" style={{ color: "#16A34A", flexShrink: 0 }} />, chipColor: "#DCFCE7" },
      { label: "Algorithms",      logo: <GitMerge  className="w-[22px] h-[22px]" style={{ color: "#9333EA", flexShrink: 0 }} />, chipColor: "#F3E8FF" },
      { label: "OOP",             logo: <Settings  className="w-[22px] h-[22px]" style={{ color: "#2563EB", flexShrink: 0 }} />, chipColor: "#EFF6FF" },
      { label: "DBMS",            logo: <Database  className="w-[22px] h-[22px]" style={{ color: "#EA580C", flexShrink: 0 }} />, chipColor: "#FFEDD5" },
      { label: "SDLC",            logo: <Brain     className="w-[22px] h-[22px]" style={{ color: "#DB2777", flexShrink: 0 }} />, chipColor: "#FCE7F3" },
      { label: "Problem Solving", logo: <Lightbulb className="w-[22px] h-[22px]" style={{ color: "#CA8A04", flexShrink: 0 }} />, chipColor: "#FEFCE8" },
    ],
  },
];

/* ══════════════════════════════════════
   Section
══════════════════════════════════════ */
const Skills = () => {
  const { ref: headRef, visible: headVisible } = useInView(0.2);

  return (
    <section id="skills" className="skills-section py-24">
      <div className="container mx-auto px-6">

        {/* Heading */}
        <div
          ref={headRef}
          className="text-center mb-16"
          style={{
            opacity: headVisible ? 1 : 0,
            transform: headVisible ? "translateY(0)" : "translateY(20px)",
            transition: "opacity 0.6s ease, transform 0.6s ease",
          }}
        >
          <span className="skills-label">Skills & Expertise</span>
          <h2 className="text-4xl md:text-5xl font-bold mt-3 mb-4 skills-heading">
            Technical Skills &amp;{" "}
            <span className="skills-heading-gradient">Expertise</span>
          </h2>
          <p className="text-lg text-muted-foreground max-w-2xl mx-auto">
            A comprehensive skill set built through academic learning and hands-on internship experience
          </p>
        </div>

        {/* Cards grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
          {skillCategories.map((cat, i) => (
            <CategoryCard key={cat.title} category={cat} delay={i * 80} />
          ))}
        </div>
      </div>

      {/* ── Scoped styles ── */}
      <style>{`
        /* Section background */
        .skills-section {
          position: relative;
        }

        /* Label pill */
        .skills-label {
          display: inline-block;
          padding: 4px 16px;
          border-radius: 999px;
          font-size: 0.875rem;
          font-weight: 600;
          background: linear-gradient(135deg, #c084fc22, #818cf822);
          color: hsl(var(--primary));
          border: 1px solid hsl(var(--primary) / 0.25);
          letter-spacing: 0.03em;
        }

        /* Heading gradient + glow */
        .skills-heading {
          color: hsl(var(--foreground));
        }
        .skills-heading-gradient {
          background: linear-gradient(135deg, #a855f7, #6366f1);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          filter: drop-shadow(0 0 18px rgba(168,85,247,0.35));
        }

        /* Card base — light */
        .skills-card {
          position: relative;
          border-radius: 1.5rem;
          overflow: hidden;
          background: #ffffff;
          border: 1px solid rgba(139,92,246,0.12);
          box-shadow: 0 4px 24px -4px rgba(139,92,246,0.10), 0 1px 4px rgba(0,0,0,0.04);
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .skills-card:hover {
          transform: translateY(-8px);
          box-shadow: 0 20px 48px -8px rgba(139,92,246,0.22), 0 4px 12px rgba(0,0,0,0.06);
        }

        /* Card base — dark */
        .dark .skills-card {
          background: #111827;
          border: 1px solid rgba(255,255,255,0.08);
          box-shadow: 0 4px 32px -4px rgba(0,0,0,0.5), 0 1px 6px rgba(0,0,0,0.3);
        }
        .dark .skills-card:hover {
          box-shadow: 0 20px 56px -8px rgba(0,0,0,0.65), 0 0 0 1px rgba(255,255,255,0.1);
        }

        /* Accent top bar */
        .card-accent-bar {
          height: 4px;
          width: 100%;
        }

        /* Icon container */
        .skills-card-icon {
          width: 56px;
          height: 56px;
          border-radius: 14px;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: transform 0.3s ease;
        }
        .skills-card:hover .skills-card-icon {
          transform: rotate(5deg) scale(1.1);
        }

        /* Skill chips — light */
        .skill-chip {
          background: #f8f7ff;
          color: #374151;
          border: 1px solid rgba(139,92,246,0.12);
          cursor: default;
          transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .skill-chip:hover {
          transform: translateY(-2px) scale(1.05);
          box-shadow: 0 4px 12px rgba(139,92,246,0.18);
        }

        /* Skill chips — dark */
        .dark .skill-chip {
          background: rgba(255,255,255,0.07) !important;
          color: #e5e7eb;
          border: 1px solid rgba(255,255,255,0.1);
        }
        .dark .skill-chip:hover {
          background: rgba(255,255,255,0.11) !important;
          box-shadow: 0 4px 14px rgba(0,0,0,0.35);
        }

        /* GitHub icon dark */
        .dark .skills-card svg[viewBox="0 0 24 24"] {
          color: #e5e7eb;
        }
      `}</style>
    </section>
  );
};

export default Skills;
